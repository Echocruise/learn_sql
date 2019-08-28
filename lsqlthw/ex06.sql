/* normal  join with equality*/
SELECT pet.id, pet.name, pet.age, pet.dead /* 选中在pet表中要输出的列*/
  FROM pet, person_pet, person/*三个表 */
  WHERE
  pet.id = person_pet.pet_id AND /*表pet中id等于person_pet中的pet_id*/
  person_pet.person_id = person.id AND /*打通person.id pet.id 通过where*/
  person.first_name = 'Zed';

/* using a sub-select */
SELECT pet.id, pet.name, pet.age,pet.dead
  FROM pet
  WHERE pet.id IN /*通过子查询联通pet.id*/
  (
    SELECT pet_id FROM person_pet, person
    WHERE person_pet.person_id = person.id
    AND person.first_name = 'Zed'
  );

CREATE VIEW dr_profile_view as SELECT users.id, users.name, users.email, doctor.sex, doctor.professional, doctor.dob, doctor.phone, doctor.region,
 doctor.district, doctor.ward, doctor.lessen, doctor.experience, doctor.address, doctor.pic, 
doctor.dept_id FROM users inner JOIN doctor WHERE users.id=doctor.user_id;
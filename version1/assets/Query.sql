CREATE VIEW dr_profile_view as SELECT users.id, users.name, users.email, doctor.sex, 
doctor.professional, doctor.dob, doctor.phone, doctor.region,
doctor.district, doctor.ward, doctor.lessen, doctor.experience, doctor.address, doctor.pic, 
doctor.dept_id FROM users inner JOIN doctor WHERE users.id=doctor.user_id;

CREATE VIEW service_view as SELECT service.service_name, service_time.day, service_time.start_at, service_time.end_at
from service_time inner JOIN service WHERE service.id = service_time.service_id;

CREATE VIEW sprofile_view as SELECT users.id, users.name, users.email, student.sex, student.yeah_of_study, student.dob, 
student.birth_place, student.current_location, student.phone_no, student.school, student.job_status, student.dept_id FROM users 
inner join student WHERE users.id=student.user_id;

CREATE VIEW hosp_profile_view as SELECT users.id, users.name, users.email, hospital.h_phone, hospital.country, hospital.region, hospital.district,
hospital.ward, hospital.street, hospital.address FROM users inner join hospital WHERE users.id =  hospital.user_id;

CREATE VIEW shop_profile_view as SELECT users.id, users.name, users.email, shop.shop_phone, shop.lessen, shop.region, shop.district,
shop.ward, shop.street, shop.address, shop.pic FROM users inner join shop WHERE users.id =  shop.user_id;

CREATE VIEW hosp_profile_view as SELECT users.id, users.name, users.email,hospital.h_phone, hospital.address, hospital.region, hospital.street, hospital.district,
hospital.ward, FROM users inner join hospital WHERE users.id = hospital.user_id;
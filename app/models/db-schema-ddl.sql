
CREATE TABLE company (
	id SERIAL PRIMARY KEY, 
	label VARCHAR(100)
);

CREATE TABLE device_type (
	id SERIAL PRIMARY KEY,
	label VARCHAR(100)
);

CREATE TABLE device (
	id SERIAL PRIMARY KEY,
	name VARCHAR(100),
	id_type INTEGER REFERENCES device_type(id) ,
	id_company INTEGER REFERENCES company(id) 
);


CREATE TABLE device_usage (
	id SERIAL PRIMARY KEY,
	start_date DATE,
	returned_date DATE
);

CREATE TABLE contact (
	id SERIAL PRIMARY KEY,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	contact_phone VARCHAR(20),
	contact_email VARCHAR(30)
);

CREATE TABLE redactor (
	id SERIAL PRIMARY KEY,
	id_contact INTEGER REFERENCES contact(id)
);

CREATE TABLE portal (
	id SERIAL PRIMARY KEY, 
	label VARCHAR(10)
);


CREATE TABLE device_testing (
	id SERIAL PRIMARY KEY,
	received_date DATE,
	planned_publish_date DATE,
	published_date DATE,
	returned_date DATE,
	finished_date DATE,
	transportations_num INTEGER,
	id_device INTEGER REFERENCES device(id),
	id_redactor INTEGER REFERENCES redactor(id),
	id_portal INTEGER REFERENCES portal(id)
);



create table admin(
	id int(11) auto_increment key,
	user varchar(255) not null,
	pass varchar(255) not null,
	last_seen varchar(255) not null
);

create table packages(
	id int(11) auto_increment key,
	package_title varchar(255) not null,
	package_desc varchar(255) not null,
	package_type varchar(255) not null,
	package_images varchar(255) not null,
	package_price varchar(255) not null,
	package_location varchar(255) not null,
	package_duration varchar(255) not null,
	package_contact varchar(255) not null,
	package_tags varchar(255) not null,
	package_date varchar(255) not null
);

create table newsletter(
	id int(11) auto_increment key,
	email varchar(255) not null,
	status varchar(255) not null,
	date varchar(255) not null
);

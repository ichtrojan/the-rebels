create table admin(
	id int(11) auto_increment key,
	user varchar(255) not null,
	pass varchar(255) not null,
	last_seen varchar(255) not null
);

create table packages(
	id int(11) auto_increment key,
	name varchar(255) not null,
	description varchar(255) not null,
	type varchar(255) not null,
	price varchar(255) not null,
	location varchar(255) not null,
	duration varchar(255) not null,
	contact varchar(255) not null,
	images varchar(255) not null,
	tags varchar(255) not null,
	dates varchar(255) not null
);

create table newsletter(
	id int(11) auto_increment key,
	email varchar(255) not null,
	status varchar(255) not null,
	date varchar(255) not null
);

create table gallery(
	id int(11) auto_increment key,
	package_id varchar(255) not null,
	images varchar(255) not null,
	dates varchar(255) not null
);
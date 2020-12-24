create table Admin(
id int(30) not null auto_increment primary key,
username varchar(200) not null,
pin varchar(200) not null
);

insert into admin values(null,'admin','123456'),(null,'admin','admin');

create table logbook(
id int(30) not null auto_increment primary key,
md1 text not null,
td2 text not null,
wd3 text not null,
td4 text not null, 
fd5 text not null,
name varchar(200) not null,
matno varchar(200) not null,  
cc varchar(200) not null,  
noc varchar(200) not null,
com text not null, 
cd varchar(200) not null,  
date varchar(200) not null,
apm varchar(200) not null,
apt varchar(200) not null, 
apw varchar(200) not null,
apth varchar(200) not null,
apf varchar(200) not null     
);

create table reg(
id int(30) not null auto_increment primary key,
fname varchar(200) not null,
lname varchar(200) not null,
dept varchar(200) not null,
pix varchar(200) not null,
matno varchar(200) not null,
cos varchar(200) not null,
noc varchar(200) not null,
cc varchar(200) not null,
gender varchar(200) not null, 
state varchar(200) not null, 
lga varchar(200) not null, 
date_of_birth varchar(200) not null, 
pin varchar(200) not null,
username varchar(200) not null,
date varchar(200) not null
);
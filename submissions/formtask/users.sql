 create DATABASE register;
 USE register;	
 create TABLE users(
     registration_id int(11) PRIMARY key not null AUTO_INCREMENT,
     firstname varchar(30) not null,
     lastname varchar(30) not null,
     email varchar(50) not null,
     password1 varchar(30) not null,
     confirmpassword varchar(30) not null,
     phoneno int(11) not null,
     gender ENUM('male','female') not null,
     country varchar(30) not null,
     created_at datetime not null
 );
 
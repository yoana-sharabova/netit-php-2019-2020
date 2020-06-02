CREATE SCHEMA monsterhr;

CREATE TABLE monsterhr.users (

  id 		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  company 	VARCHAR(256) NULL DEFAULT NULL,
  username 	VARCHAR(256) NOT NULL,
  email 	VARCHAR(256) NOT NULL,
  password 	VARCHAR(256) NOT NULL,
  role 		TINYINT(4) NULL DEFAULT NULL
  
  );
  
CREATE TABLE monsterhr.user_personal_data (

  user_id 		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fname 		VARCHAR(256) NULL,
  lname 		VARCHAR(256) NULL,
  age 			VARCHAR(256) NULL,
  address 		VARCHAR(256) NULL,
  mobile 		VARCHAR(45) NULL,
  experience 	TEXT NULL,
  skills 		TEXT NULL,
  education 	TEXT NULL
  
  );
  
CREATE TABLE monsterhr.posts (

  id 			INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title 		VARCHAR(256) NOT NULL,
  details 		VARCHAR(512) NOT NULL,
  description 	TEXT NOT NULL
  
  );
  
 CREATE TABLE monsterhr.job_categories (
 
  id 		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title 	VARCHAR(256) NOT NULL,
  priority 	INT(11) NOT NULL
  
); 
  
CREATE TABLE monsterhr.post_job_category (

  post_id 		INT(11) NULL,
  category_id 	INT(11) NULL
  
);

CREATE TABLE monsterhr.comments (

  id 		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  post_id 	INT(11) NULL,
  content 	TEXT NULL,
  author 	VARCHAR(256) NULL
  
);

CREATE TABLE monsterhr.menus (

  id 			INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title 		VARCHAR(256) NULL,
  placeholder 	VARCHAR(256) NULL
   
);

CREATE TABLE monsterhr.menu_items (

  id 		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  menu_id 	INT(11) NULL,
  title 	VARCHAR(256) NULL,
  link 		VARCHAR(256) NULL
  
  );

INSERT INTO monsterhr.users(id, username, email, password, role) VALUES('1', 'super', 'super@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', '0'); /* pass is 123456 */
INSERT INTO monsterhr.users(id, username, email, password, role) VALUES('2', 'hr', 'hr@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', '1'); 
INSERT INTO monsterhr.users(id, company, email, password, role) VALUES('3', 'employer', 'employer@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', '2'); 
INSERT INTO monsterhr.users(id, username, email, password, role) VALUES('4', 'employee', 'employee@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', '3'); 
 
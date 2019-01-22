DROP DATABASE IF EXISTS tasks;
CREATE DATABASE tasks;
USE tasks;

create table tasks (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, description TEXT, owner VARCHAR(30), creation_date DATETIME);

insert into tasks (description, owner, creation_date) values ('Uma descricao qualquer', 'Maria', '2019-01-21 11:45:00');
insert into tasks (description, owner, creation_date) values ('Outra descricao', 'Joao', '2019-01-21 14:15:00');
insert into tasks (description, owner, creation_date) values ('Mais uma descricao', 'Juca', '2019-01-22 11:00:00');
insert into tasks (description, owner, creation_date) values ('Ultima descricao', 'Dunha', '2019-01-231 09:45:00');

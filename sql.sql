/*
 * This file is for remembering all of the code I have used
 * within my database SQL code.
 */

/*
 * CREATING A TABLE IN ORDER TO STORE MY LOGIN DATA
 */
 
CREATE TABLE users (
    user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    user_username varchar(256) not null,
    user_password varchar(256) not null
);

/*
 * Inserting a user to the database, this user will be removed
 * once the page is done, this one will be user for development
 * purposes.
 *
 * The user_id column is not filled in, because it is and AUTO_INCREMENT
 * and will be increased by one with every user inserted in the database
 * automaticly. If a user is removed, next time a user is inserted, it
 * will insert a user with that ID instead.
 */
 
INSERT INTO users (
    user_username,
    user_password
) VALUES (
    "admin",
    "admin123"
);
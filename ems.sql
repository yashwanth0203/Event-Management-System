CREATE TABLE admin(
    admin_id INT PRIMARY KEY AUTO_INCREMENT , 
    a_name VARCHAR(20),
    a_email VARCHAR(20) UNIQUE,
    password varchar(20),
    address varchar(20)
);

CREATE TABLE caterers(
    caterer_id INT PRIMARY KEY AUTO_INCREMENT,
    c_name VARCHAR(20),
    c_email VARCHAR(20) UNIQUE,
    c_address VARCHAR(20)
    
);

CREATE TABLE staff(
    staff_id INT PRIMARY KEY AUTO_INCREMENT,
    s_name VARCHAR(20),
    s_email VARCHAR(20) UNIQUE
);

CREATE TABLE venue(
    venue_id INT PRIMARY KEY AUTO_INCREMENT,
    v_name VARCHAR(20),
    v_address VARCHAR(20),
    capacity INT,
    UNIQUE(v_name , v_address)
);

CREATE TABLE manager(
    manager_id INT UNIQUE AUTO_INCREMENT,
    venue_id INT PRIMARY KEY,
    m_name VARCHAR(20),
    m_email VARCHAR(20) UNIQUE,
    FOREIGN KEY(venue_id) REFERENCES venue(venue_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE users(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
    admin_id INT,
	u_name varchar(20),
	u_email varchar(20) UNIQUE,
	address varchar(20),
    FOREIGN KEY(admin_id) REFERENCES admin(admin_id) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE events(
    event_id INT PRIMARY KEY AUTO_INCREMENT,
    e_name VARCHAR(20),
    e_date DATE ,
    venue_id INT,
    staff_id INT,
    caterer_id INT,
    user_id INT,
    admin_id INT,
    no_of_attendees INT,
    UNIQUE (e_date,venue_id),
    UNIQUE (e_date,staff_id),
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(venue_id) REFERENCES venue(venue_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(staff_id) REFERENCES staff(staff_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(caterer_id) REFERENCES caterers(caterer_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(admin_id) REFERENCES admin(admin_id) ON DELETE CASCADE ON UPDATE CASCADE
);

DELIMITER $$
CREATE TRIGGER prevent_caterer1_deletion
BEFORE DELETE ON caterers
FOR EACH ROW
BEGIN
    DECLARE referenced INT;
    SELECT COUNT(*) INTO referenced FROM events
    WHERE (caterer_id = OLD.caterer_id AND caterer_id IS NOT NULL);
    
    IF referenced > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot delete record: it is being referenced by an event';
    END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER prevent_venue_deletion
BEFORE DELETE ON venue
FOR EACH ROW
BEGIN
    DECLARE referenced INT;
    SELECT COUNT(*) INTO referenced FROM events
    WHERE (venue_id = OLD.venue_id AND venue_id IS NOT NULL);
    
    IF referenced > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot delete record: it is being referenced by an event';
    END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER prevent_staff_deletion
BEFORE DELETE ON staff
FOR EACH ROW
BEGIN
    DECLARE referenced INT;
    SELECT COUNT(*) INTO referenced FROM events
    WHERE (staff_id = OLD.staff_id AND staff_id IS NOT NULL);
    
    IF referenced > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot delete record: it is being referenced by an event';
    END IF;
END$$
DELIMITER ;
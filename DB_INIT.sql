CREATE SCHEMA `e_commerce`;

CREATE TABLE `e_commerce`.`b_customers` (
  `ID` INT NOT NULL auto_increment,
  `Name` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(45) NOT NULL,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(45) NOT NULL,
  `Zip` VARCHAR(45) NOT NULL,
  `Category` VARCHAR(45) NOT NULL,
  `Gross` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`));

CREATE TABLE `e_commerce`.`h_customers` (
  `ID` INT NOT NULL auto_increment,
  `Name` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(45) NOT NULL,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(45) NOT NULL,
  `Zip` VARCHAR(45) NOT NULL,
  `M_status` VARCHAR(45) NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `Age` INT NOT NULL,
  `Income` INT NOT NULL,
  PRIMARY KEY (`ID`));

CREATE TABLE `e_commerce`.`region` (
  `rID` INT NOT NULL auto_increment,
  `rName` VARCHAR(45) NOT NULL,
  `rManager` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`rID`));

CREATE TABLE `e_commerce`.`store` (
  `storeID` INT NOT NULL auto_increment,
  `Address` VARCHAR(45) NOT NULL,
  `Manager` VARCHAR(45) NOT NULL,
  `regionLocated` INT NOT NULL,
  `n_salesperson` INT NOT NULL,  
  PRIMARY KEY (`storeID`),
  CONSTRAINT `locate`
    FOREIGN KEY (`regionLocated`)
    REFERENCES `e_commerce`.`region` (`rID`));

CREATE TABLE `e_commerce`.`customers` (
  `cID` INT NOT NULL auto_increment,
  `email` VARCHAR(45) NOT NULL,
  `PIN` INT NOT NULL,  
  `bcID` INT,
  `hcID` INT,
  CONSTRAINT uc_email UNIQUE (email),
  PRIMARY KEY (`cID`),
  CONSTRAINT `b_cus`
    FOREIGN KEY (`bcID`)
    REFERENCES `e_commerce`.`b_customers` (`ID`),
  CONSTRAINT `h_cus`
    FOREIGN KEY (`hcID`)
    REFERENCES `e_commerce`.`h_customers` (`ID`));

CREATE TABLE `e_commerce`.`products` (
  `pID` INT NOT NULL auto_increment,
  `pName` VARCHAR(45) NOT NULL,
  `Inventory` INT NOT NULL,
  `Price` DOUBLE NOT NULL,
  `StockStoreID` INT NOT NULL,
  PRIMARY KEY (`pID`),
  UNIQUE KEY (`pName`, `StockStoreID`),
  CONSTRAINT `stockIn`
    FOREIGN KEY (`StockStoreID`)
    REFERENCES `e_commerce`.`store` (`storeID`));


CREATE TABLE `e_commerce`.`salespersons` (
  `salespersonID` INT NOT NULL auto_increment,
  `Name` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Title` VARCHAR(45) NOT NULL,
  `storeAssigned` INT NOT NULL,
  `salary` DOUBLE NOT NULL,
  PRIMARY KEY (`salespersonID`),
  CONSTRAINT `workAt`
    FOREIGN KEY (`storeAssigned`)
    REFERENCES `e_commerce`.`store` (`storeID`));

CREATE TABLE `e_commerce`.`transactions` (
  `tID` INT NOT NULL auto_increment,
  `Date` VARCHAR(45) NOT NULL,
  `productID` INT NOT NULL,
  `customerID` INT NOT NULL,
  `salespersonID` INT NOT NULL,
  `Quantity` INT NOT NULL,
  PRIMARY KEY (`tID`),
  CONSTRAINT `productInfo`
    FOREIGN KEY (`productID`)
    REFERENCES `e_commerce`.`products` (`pID`),
  CONSTRAINT `buy`
    FOREIGN KEY (`customerID`)
    REFERENCES `e_commerce`.`customers` (`cID`),
  CONSTRAINT `sell`
    FOREIGN KEY (`salespersonID`)
    REFERENCES `e_commerce`.`salespersons` (`salespersonID`));
    
insert into e_commerce.region(rName, rManager) values('Great Pittsburgh', 'Homer');
insert into e_commerce.region(rName, rManager) values('Middle Pennsylvania', 'Euclid');

insert into e_commerce.store(Address, Manager, regionLocated, n_salesperson) values('Greenfield Ave', 'Plato', 1, 0);
insert into e_commerce.store(Address, Manager, regionLocated, n_salesperson) values('Fifth Ave', 'Aristotle', 1, 0);
insert into e_commerce.store(Address, Manager, regionLocated, n_salesperson) values('State College', 'Socrates', 2, 0);

INSERT INTO e_commerce.products(pName,Inventory,Price, StockStoreID) VALUES ('Computer',2,3,1) 
  ON DUPLICATE KEY UPDATE Inventory=(Inventory + 2) ;

INSERT INTO e_commerce.salespersons(Name,Address,Email,Title,storeAssigned,salary) VALUES('JohnDoe','Oakland','jd@gmail.com','Salesman',2,1000.5);
UPDATE e_commerce.store SET n_salesperson = n_salesperson + 1 WHERE storeID = 2;

INSERT INTO e_commerce.h_customers(Name, Street, City, State, Zip, M_status, Gender, Age, Income) VALUES('Some Customer','Melwood Street','Pittsburgh', 'PA', '15207', 'Classified', 'Others', 30, 20000);
INSERT INTO e_commerce.customers(PIN, email, hcID) VALUES(123,'John@123.com', 1);





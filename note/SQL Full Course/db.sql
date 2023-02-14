create table employees(emp_id int, emp_name varchar(50), age int, gender char(1), doj date, dept varchar(50), city varchar(50), salary float); 


insert into employees values(112, "Shane", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121);

insert into employees values(113, "Sara", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(114, "Marry", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(115, "John", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(116, "Ammy", 32, 'F', '2001-10-01', 'Tech', 'Seattle', 411121),
(117, "Angle", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(118, "MarCus", 35, 'M', '2000-10-01', 'IT', 'Seattle', 411121),
(119, "Shopia", 32, 'F', '2001-10-01', 'Sale', 'Seattle', 411121),
(120, "Cherry", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(121, "Amelia", 35, 'M', '2000-10-01', 'Finance', 'Seattle', 411121),
(122, "Robert", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(123, "William", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(124, "Bella", 35, 'M', '2000-10-01', 'Finance', 'Seattle', 411121),
(125, "Miya", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(126, "Chou", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(127, "Aldoul", 35, 'M', '2016-10-01', 'Marketing', 'Seattle', 411121),
(128, "Layla", 32, 'F', '2001-10-01', 'Finance', 'Seattle', 411121),
(129, "Saivana", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(130, "Roger", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(131, "Yin", 32, 'F', '2019-05-05', 'IT', 'NewYork', 74125),
(132, "Marcov", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(133, "NaNa", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(134, "Erora", 32, 'F', '2012-10-01', 'Marketing', 'Seattle', 411121),
(135, "Karina", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(136, "Natalia", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(137, "Assasin", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(138, "Saver", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(139, "Helcurt", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(140, "Joy", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(141, "Franko", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(142, "Bruno", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(143, "Khing Myat Myat Soe", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(144, "Thea Nu Phyu", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(145, "Inginhlainkyaw", 35, 'M', '2020-10-01', 'Marketing', 'Seattle', 411121),
(146, "Hey Mar Kyaw", 32, 'F', '2011-10-01', 'Marketing', 'Seattle', 411121),
(147, "Wine Aung", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(148, "Aung Ye Htat", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(149, "Myint Lwin", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(150, "ThuRaMyoHtat", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(151, "AMK", 35, 'M', '2000-10-01', 'Marketing', 'Seattle', 411121),
(152, "ShweSiHlaing", 32, 'F', '2001-10-01', 'Marketing', 'Seattle', 411121),
(153, "KThewMoe", 41, 'M', '2010-01-01', 'Product', 'Austin', 52123),
(154, "HeinMinHtat", 35, 'M', '2004-10-01', 'Marketing', 'Seattle', 411121),
(155, "KyiSoeLin", 32, 'F', '2003-10-01', 'Marketing', 'Seattle', 411121),
(156, "PanEiphyu", 41, 'M', '2002-01-01', 'Product', 'Austin', 52123),
(157, "PhyuPhyuMyint", 35, 'M', '2001-10-01', 'Marketing', 'Seattle', 411121),
(158, "MayMyatHmu", 32, 'F', '2020-10-01', 'Marketing', 'Seattle', 411121),
(159, "MayMyatMon", 41, 'M', '2019-01-01', 'Product', 'Austin', 52123),
(160, "SoeThiHa", 35, 'M', '2018-10-01', 'Marketing', 'Seattle', 411121),
(161, "MaEi", 32, 'F', '2017-10-01', 'Marketing', 'Seattle', 411121),
(162, "ThiRi", 41, 'M', '2016-01-01', 'Product', 'Austin', 52123),
(163, "ThuYa", 35, 'M', '2015-10-01', 'Marketing', 'Seattle', 411121);

## sales table 
create table sales (product_id int primary key, sell_price float, quantity int, state varchar(20));
## insert data into sales table
insert into sales values
(1, 100, 10, 'California'),
(2, 200, 20, 'Yangon'),
(3, 300, 30, 'Myanmar'),
(4, 400, 40, 'Mandalay'),
(5, 500, 50, 'India'),
(6, 600, 60, 'Thai'),
(7, 700, 70, 'Malaysai'),
(8, 800, 80, 'Singapu'),
(9, 900, 90, 'Naypyitaw'),
(10, 1000, 100, 'Mitthila'),
(11, 1100, 110, 'Pakicstan'),
(12, 1200, 120, 'Australia'),
(13, 1300, 130, 'NewYork'),
(14, 1400, 140, 'NewYork'),
(15, 1500, 150, 'NewYork'),
(16, 1600, 160, 'NewYork'),
(17, 1700, 170, 'Thai'),
(18, 1800, 180, 'Thai'),
(19, 1900, 190, 'Malaysai'),
(20, 2000, 200, 'Thai'),
(21, 2100, 210, 'Texas'),
(22, 2200, 220, 'Washington'),
(23, 2300, 230, 'Ohio'),
(24, 2400, 240, 'Chicago'),
(25, 2500, 250, 'China'),
(26, 2600, 260, 'Arizona'),
(27, 2700, 270, 'Kansas'),
(28, 2800, 280, 'Karbala'),
(29, 2900, 290, 'WA'),
(30, 3000, 300, 'WA'),
(31, 3100, 310, 'WA'),
(32, 3200, 320, 'WA'),
(33, 3300, 330, 'WA'),
(34, 3400, 340, 'WA'),
(35, 3500, 350, 'WA'),
(36, 3600, 360, 'WA'),
(37, 3700, 370, 'WA'),
(38, 3800, 380, 'WA'),
(39, 3900, 390, 'Alaska'),
(40, 4000, 400, 'Alaska'),
(41, 4100, 410, 'Alaska'),
(42, 4200, 420, 'Alaska'),
(43, 4300, 430, 'Alaska'),
(44, 4400, 440, 'Alaska'),
(45, 4500, 450, 'Alaska'),
(46, 4600, 460, 'Alaska'),
(47, 4700, 470, 'Alaska'),
(48, 4800, 480, 'Alaska'),
(49, 4900, 490, 'Alaska'),
(50, 5000, 500, 'Alaska'),
(51, 5100, 510, 'Alaska'),
(52, 5200, 520, 'Alaska'),
(53, 5300, 530, 'Alaska'),
(54, 5400, 540, 'Alaska'),
(55, 5500, 550, 'Alaska'),
(56, 5600, 560, 'Alaska'),
(57, 5700, 570, 'Alaska'),
(58, 5800, 580, 'Alaska'),
(59, 5900, 590, 'Alaska'),
(60, 6000, 600, 'Alaska'),
(61, 6100, 610, 'Alaska'),
(62, 6200, 620, 'Alaska'),
(63, 6300, 630, 'Myanmar'),
(64, 6400, 640, 'Myanmar'),
(65, 6500, 650, 'Alaska'),
(66, 6600, 660, 'SriLanka'),
(67, 6700, 670, 'SriLanka'),
(68, 6800, 680, 'America'),
(69, 6900, 690, 'England'),
(70, 7000, 700, 'Germany'),
(71, 7100, 710, 'Philippines'),
(72, 7200, 720, 'colombia'),
(73, 7300, 730, 'Alaska'),
(74, 7400, 740, 'Alaska');
## create c_product table
create table c_product (product_id int, cost_pric
e float);

## insert data 
insert into c_product values(1, 270.0),
(2, 345.0);


## Table Join 
create table cricket(cricket_id int auto_increment, n
ame varchar(30), primary key(cricket_id));

## insert into data cricket table
insert into cricket values()

create table football (football_id int auto_increment, name varchar(30), primary key(football_id));

## create table products // productCode / productName / productLine / productScale / productVendor / productDescription / quantityInstock / buyPrice / MSRP / 

create table products(productCode int auto_increment, productName varchar(250), productLine varchar(250), productScale varchar(250), productVendor varchar(250), productDescription text, quantityInstock float, buyPrice float, MSRP float, primary key(productCode));

## create table productlines // productLine / textDescription / htmlDescription / image 

create table productlines(productLine varchar(250), textDescription text, htmlDescription text, image varchar(255));

## create table orders // orderNumber / orderDate / requiredDate / shippedDate / status / comments / customerNumber

create table orders(orderNumber int auto_increment, orderDate date, requiredDate date, shippedDate date, status varchar(250), comments text, customerNumber int, primary key(orderNumber));

## create orderdetails // orderNumber / productCode / quantityOrdered / priceEach / orderLineNumber

create table orderdetails(orderNumber int, productCode varchar(250), quantityOrdered int, priceEach float, orderLineNumber int);

## create table customers // customerNumber / customerName / contactLastName / contactFirstName / phone / addressLine1 / addressLine2 / city / state / postalCode / country / salesRepEmployeeNumber / creditLimit

create table customers(customerNumber int auto_increment, customerName varchar(250), contactLastName varchar(250), contactFirstName varchar(250), phone varchar(250), addressLine1 varchar(250), addressLine2 varchar(250), city varchar(250), state varchar(250), postalCode varchar(250), country varchar(250), salesRepEmployeeNumber int, creditLimit float, primary key(customerNumber));

## right Join
## create employee_tables table
create table employee_tables(employeeNumber int auto_increment, lastName varchar(250), firstName varchar(250), extension varchar(250), email varchar(250), officeCode varchar(250), reportsTo int, jobTitle varchar(250), primary key(employeeNumber));
/* Cau 1:*/
SELECT * FROM products
JOIN categories ON categories.categoryID = products.categoryID
WHERE categoryName  LIKE '%e%';

/* Cau 2:*/
SELECT * FROM `products` WHERE dateAdded LIKE '2013%'
/* Cau 3:*/
SELECT * FROM `addresses`
JOIN customers ON customers.customerID = addresses.customerID
WHERE emailAddress LIKE '%@gmail.com'
/* Cau 4 */
SELECT * FROM `products` WHERE 
 discountPercent = 30 AND listPrice > 500
 ORDER BY listPrice DESC














SELECT * FROM `products`
JOIN `orderItems` ON `orderItems`.`productID` = `products`.`productID`
JOIN `orders` ON `orders`.`orderID` = `orderItems`.`orderID`
JOIN `customers` ON `customers`.`customerID` = `orders`.`customerID`
WHERE `customers`.`emailAddress` LIKE '%@yahoo.com%';
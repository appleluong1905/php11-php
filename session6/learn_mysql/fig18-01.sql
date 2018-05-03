/* lay tat cac san pham tu bang products*/
SELECT * FROM products;

/* lay id, ten, gia cua bang Product va sap xep the
thu tu gia tang dan */

SELECT productID, productName, listPrice
FROM products
ORDER BY listPrice;

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 450
ORDER BY listPrice;

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 10;



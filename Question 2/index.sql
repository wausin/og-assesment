SELECT COUNT(Orders.Order_ID) AS Number_Of_Order,
SUM(Orders_Products.Promotion_Price) AS Total_Sales_Amount_Promo,
SUM(Orders_Products.Normal_Price) AS Total_Sales_Amount_Normal
FROM Orders
INNER JOIN Orders_Products ON Orders.Order_ID=Orders_Products.Order_ID
GROUP BY Orders.Sales_Type
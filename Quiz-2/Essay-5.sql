SELECT 
	customers.name as customer_name,
	sum(orders.amount) as total_amount
FROM customers
JOIN orders
	ON orders.customer_id = customers.id
GROUP BY customers.name
ORDER BY total_amount
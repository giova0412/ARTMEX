SELECT * FROM Artesano;
SELECT * FROM Taller
WHERE ID_Artesano = 1;
SELECT * FROM Producto;
SELECT * FROM Pedido
WHERE ID_Usuario = 1;
SELECT P.Nombre, PP.Cantidad
FROM Pedido_Producto PP
JOIN Producto P ON PP.ID_Producto = P.ID_Producto
WHERE PP.ID_Pedido = 1;

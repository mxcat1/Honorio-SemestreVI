# 3.1

SELECT Codigo_Producto,Descripcion_Producto,Estado_Producto,Stock_Actual,Stock_Minimo FROM productos;

# 3.2

SELECT Codigo_Producto,Descripcion_Producto,Estado_Producto,Stock_Actual,Stock_Minimo from productos where Stock_Actual<Stock_Minimo;

# 3.3

SELECT distinct Razon_Social ,if(Tipo_Movimiento = 'Venta','Cliente','Proveedor') as Tipo
from movimientos order by Razon_Social;

# 3.4 Cambiar 12 por el mes y 2004 por el año q tu vas a poner

select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) as Total from movimientos as M
    inner join detalle_movimientos as DM
      on M.Codigo_Movimiento=DM.Codigo_Movimiento
    inner join productos as P
      on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=12 and year(M.Fecha)=2004
group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30 ;

# 3.5 Cambiar 12 por el mes y 2004 por el año q tu vas a poner
select sum(DM.Precio_Unitario) as Total from movimientos as M
    inner join detalle_movimientos as DM
      on M.Codigo_Movimiento=DM.Codigo_Movimiento
    inner join productos as P
      on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=12 and year(M.Fecha)=2004 #año y mes
group by M.Tipo_Movimiento;
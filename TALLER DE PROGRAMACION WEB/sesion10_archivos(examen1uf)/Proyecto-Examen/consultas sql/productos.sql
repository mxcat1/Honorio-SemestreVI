select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004 group by P.Descripcion_Producto order by DM.Cantidad_Producto desc limit 0,30 ;

select min(DM.Cantidad_Producto) from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004 limit 0,30;

select * from productos where Descripcion_Producto='REMOVEDOR TEKNO';

select P.Descripcion_Producto,DM.Cantidad_Producto,DM.Precio_Unitario from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where P.Descripcion_Producto='REMOVEDOR TEKNO';
create procedure masvendidos()
  begin
    declare minimo decimal;
    declare maximo decimal;
    set maximo = ((select max(DM.Cantidad_Producto) from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004 limit 0,30));
    set minimo =((select min(DM.Cantidad_Producto) from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004 limit 0,30));
    select M.Codigo_Movimiento,month(M.Fecha),P.Descripcion_Producto,DM.Cantidad_Producto from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004 and (DM.Cantidad_Producto>minimo or DM.Cantidad_Producto<=maximo) limit 0,30;
  end;
drop procedure masvendidos;

call masvendidos();
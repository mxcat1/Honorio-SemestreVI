create procedure mas_vendidos(IN mes int, IN ano int)
  begin
    select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) as Total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=mes and year(M.Fecha)=ano
    group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30 ;
  end;

drop procedure mas_vendidos;
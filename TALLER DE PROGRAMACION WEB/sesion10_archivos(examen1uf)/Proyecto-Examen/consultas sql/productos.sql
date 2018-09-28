select sum(DM.Precio_Unitario) as Total from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=12 and year(M.Fecha)=2004
#                                                   and M.Tipo_Movimiento='Venta'
group by M.Tipo_Movimiento;

create procedure ventas_compras(mes int, ano int)
  begin
    select sum(DM.Precio_Unitario) as Total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=mes and year(M.Fecha)=ano
    group by M.Tipo_Movimiento;
  end;
drop procedure ventas_compras;
call ventas_compras(12,2004);

select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) as Total from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=12 and year(M.Fecha)=2004
group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30 ;


CREATE procedure mas_vendidos(mes int ,ano int)
  begin
    select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) as Total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=mes and year(M.Fecha)=ano
    group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30 ;
  end;
drop procedure mas_vendidos;
call mas_vendidos(11,2004);


select max(p.total) from (select sum(DM.Cantidad_Producto) as total from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=1 and year(M.Fecha)=2004
group by P.Descripcion_Producto order by DM.Cantidad_Producto desc limit 0,30) as p;

select * from productos where Descripcion_Producto='REMOVEDOR TEKNO';

select P.Descripcion_Producto,DM.Cantidad_Producto,DM.Precio_Unitario from movimientos as M
  inner join detalle_movimientos as DM
    on M.Codigo_Movimiento=DM.Codigo_Movimiento
  inner join productos as P
    on P.Codigo_Producto=DM.Codigo_Producto where P.Descripcion_Producto='REMOVEDOR TEKNO';
create procedure masvendidos(mes int , ano int)
  begin
    declare minimo decimal;
    declare maximo decimal;
    set maximo = (select max(p.total) from (select sum(DM.Cantidad_Producto) as total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=mes and year(M.Fecha)=ano
    group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30) as p);
    set minimo =(select min(p.total) from (select sum(DM.Cantidad_Producto) as total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=mes and year(M.Fecha)=ano
    group by P.Descripcion_Producto order by sum(DM.Cantidad_Producto) desc limit 0,30) as p);
    select M.Codigo_Movimiento,M.Fecha,P.Descripcion_Producto,sum(DM.Cantidad_Producto) as total from movimientos as M
      inner join detalle_movimientos as DM
        on M.Codigo_Movimiento=DM.Codigo_Movimiento
      inner join productos as P
        on P.Codigo_Producto=DM.Codigo_Producto where (MONTH(M.Fecha)=mes and year(M.Fecha)=ano)
    group by P.Descripcion_Producto
    HAVING total>minimo and total<=maximo
    order by sum(DM.Cantidad_Producto) desc limit 0,30;
  end;
drop procedure masvendidos;

call masvendidos(12,2004);
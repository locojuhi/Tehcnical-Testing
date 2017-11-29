select 
	distinct nombre,
	sum(cotizacioncuotas.AbonoCapital) as valorTotalPagado
from 
	sucursal
inner join
	cotizacion on cotizacion.idSucursal = sucursal.id
inner join cotizacioncuotas on cotizacioncuotas.idCotizacion = cotizacion.id

where cotizacioncuotas.Estado = "Pagado"

group by sucursal.nombre

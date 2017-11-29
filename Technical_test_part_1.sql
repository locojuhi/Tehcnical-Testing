select 
	CedulaOCe as cedula,
	concat(PrimerNombre , ' ', PrimerApellido) as nombre,
	DiasEnMora,
	case 
		when DiasEnMora between 1 and 20 then 'Riesgo​ ​Bajo'
		when DiasEnMora between 21 and 35 then 'Riesgo​ ​Medio'
		when DiasEnMora > 35 then 'Riesgo​ ​Alto'
	end as riesgo,
	ci.Nombre as ciudad
from
	cliente
inner join
	ciudad as ci on ci.id = cliente.idCiudad
order by cliente.DiasEnMora asc

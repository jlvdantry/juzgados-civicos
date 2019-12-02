cat > $0.cmd << fin
{
    if (\$1==par) {
       print \$2
    }
}
fin
DB_HOST=`cat .env | awk -v par=DB_HOST -F = -f $0.cmd`
DB_DATABASE=`cat .env | awk -v par=DB_DATABASE -F = -f $0.cmd`
DB_USERNAME=`cat .env | awk -v par=DB_USERNAME -F = -f $0.cmd`
DB_PASSWORD=`cat .env | awk -v par=DB_PASSWORD -F = -f $0.cmd`
echo $DB_HOST
export PGPASSWORD=$DB_PASSWORD
##DB_DATABASE=template1
##DB_USERNAME=postgres
DB_HOST=localhost
cat > $0.sql << fin
--select * from users 
--where email='jlvdantry@hotmail.com';
--select * from perfiles_users where idusuario=20;
--select * from perfiles;
--delete from users where email='jlvdantry@hotmail.com';
--update boletas set estatus=0 where boleta_remision='SDGBFGNDDFG';
--select * from boletas where boleta_remision='SDGBFGNDDFG';
--select * from infractores where idboleta=(select id from boletas where boleta_remision='SDGBFGNDDFG');
select * from infracciones
--select users.*,case when activo=0 then 'Pendiente' when activo=1 then 'Aceptado' when activo=2 then 'Rechazado' when activo=3 then 'Eliminado' else 'Desconocido' end desactivo , (trim(coalesce(nombres,'')) || ' ' || trim(coalesce(ape_pat,'')) || ' ' || trim(coalesce(ape_mat,''))) nombrecompleto ,(select descripcion from perfiles pe where pe.id in (select idperfil from perfiles_users where idusuario=users.id) order by id desc limit 1) desperfil ,(select id from perfiles pe where pe.id in (select idperfil from perfiles_users where idusuario=users.id) order by id desc limit 1) idperfil ,(select juzgado from juzgados where id = users.idjuzgado) desjuzgado,(select direccion from juzgados where id = users.idjuzgado) dirjuzgado from users  left join perfiles_users pu on  idusuario=users.id  where pu.idperfil=1 
--and idjuzgado=
fin
psql -h $DB_HOST -d $DB_DATABASE -U $DB_USERNAME  < $0.sql
##psql -U $DB_USERNAME  < $0.sql     ## para crear la bse de datos
##pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > database/migrations/users.dmp
##pg_dump -s -t inmuebles -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/inmuebles.dmp
##pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/users.dmp
##pg_dump -s -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > esquema_pc.sql
rm $0.cmd
rm $0.sql

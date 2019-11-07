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
--select * from users;
--select * from establecimientos where email_acreditado='jlvdantry@hotmail.com';
--update establecimientos set id_tipoestablecimiento=1 where rfc='VABL590324V44';
--select descripcion || '-' || agrupacion as descripcion from figuras where id not in (select id_figuras from comites where id_inmueble=136)
--select * from establecimientos where rfc='VABL590324V58'
--delete from users where email='jlvdantry@yahoo.com';
--select * from users where email='jlvdantry@yahoo.com';
--select * from users where email='jlvdantry@yahoo.com';
--select * from perfiles;
--select  id,descripcion || '-' || agrupacion || case when esobligatorio=true then ' (OBLIGATORIO)' else '' end descripcion,unapersona  from figuras where id = 136
--select email,id,id_alcaldia from users;
--select alias,email_acreditado,id from inmuebles where alias like '%prueba unidad habitacional%';
--select * , (select descripcion from figuras where id=id_figuras) descrip
--from comites where id_inmueble in (select id from inmuebles where alias like '%prueba unidad habitacional%')
--select * from simulacros where id_inmueble=131;
--select * from files where id in (select id_file_0040 from simulacros where id_inmueble=131);
--select count(*) from establecimientos ;
--select * from puntos_de_reunion;
--update users set email='programas.internos@cdmx.gob.mx' where email='admon@hotmail.com'
--select * from file_tipos;
--select * from simulacros;
--select * from perfiles_users;
--select * from perfiles;
--select * from users where email='jlvdantry@hotmail.com';
--create database juzgadoscivicos;
fin
##psql -h $DB_HOST -d $DB_DATABASE -U $DB_USERNAME  < $0.sql
##psql -U $DB_USERNAME  < $0.sql     ## para crear la bse de datos
pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > database/migrations/users.dmp
##pg_dump -s -t inmuebles -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/inmuebles.dmp
##pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/users.dmp
##pg_dump -s -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > esquema_pc.sql
rm $0.cmd
rm $0.sql

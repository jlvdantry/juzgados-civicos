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
--select * from users where email='jlvdantry@hotmail.com';
--select * from perfiles_users where idusuario=20;
--select * from perfiles;
--delete from users where email='jlvdantry@hotmail.com';
update boletas set estatus=0 where boleta_remision='324';
select * from boletas where boleta_remision='324';
select * from infractores where idboleta=(select id from boletas where boleta_remision='324');
fin
psql -h $DB_HOST -d $DB_DATABASE -U $DB_USERNAME  < $0.sql
##psql -U $DB_USERNAME  < $0.sql     ## para crear la bse de datos
##pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > database/migrations/users.dmp
##pg_dump -s -t inmuebles -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/inmuebles.dmp
##pg_dump -s -t users -h $DB_HOST -U $DB_USERNAME $DB_DATABASE >> database/migrations/users.dmp
##pg_dump -s -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > esquema_pc.sql
rm $0.cmd
rm $0.sql

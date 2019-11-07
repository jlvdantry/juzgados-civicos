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
##echo $DB_HOST
echo $DB_PASSWORD
cat > $0.sql << fin
create database pc;
fin
psql -h $DB_HOST -d template1 -U $DB_USERNAME  < $0.sql
##pg_dump -a -O -t imeis -h $DB_HOST -U $DB_USERNAME $DB_DATABASE > imesi.sql
rm $0.cmd
rm $0.sql


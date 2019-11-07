cat > $0.cmd << fin
use App\Helpers\Creajsons;
\$h = new Creajsons();
\$h->coloniasJ();
\$h->giros();
exit  
fin
php artisan tinker < $0.cmd
rm $0.cmd

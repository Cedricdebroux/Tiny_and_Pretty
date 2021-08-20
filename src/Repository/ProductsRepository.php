<?php

namespace App\Repository;

use App\Classe\Search;
use App\Data\SearchData;
use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Stripe\Product;

/**
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }

    /**
     * Requête qui permet de récup les produits en fonction de la search
     * @return Product[]
     */

   /**
     * @return Products[] Returns an array of Products objects
    */

    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }



    public function findOneBySomeField($value): ?Products
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    // Public function qui permet de faire une recherche dans la categorie girl et de faire l'affichage via un lien dans le menu header

    public function findSearch(SearchData $search):array
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('f', 'p')
            ->join('p.girl', 'f');
        if(!empty($search->fille)) {
            $query = $query
                ->andWhere('f.name LIKE :fille')
                ->setParameter('fille', "%{$search->fille}%");
        }
        if(!empty($search->min)){
            $query = $query
                ->andWhere('p.price >= :min')
                ->setParameter('min', $search->min*100);
        }
        if(!empty($search->max)){
            $query = $query
                ->andWhere('p.price <= :max')
                ->setParameter('max', $search->max*100);
        }
        if(!empty($search->girls)){
            $query = $query
                ->andWhere('f.id IN (:girls)')
                ->setParameter('girls', $search->girls);
        }
        return $query->getQuery()->getResult();
    }

    // public function qui permet de faire une recherche dans la catégories graçon uniquement et fair un affichage via les liens dans le menu (header)

    public function findSearchBoy(SearchData $search):array
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('b', 'p')
            ->join('p.boy', 'b');
        if(!empty($search->garcon)) {
            $query = $query
                ->andWhere('b.name LIKE :garcon')
                ->setParameter('garcon', "%{$search->garcon}%");
        }
        // Recherche par prix minimum et maximum
        if(!empty($search->min)){
            $query = $query
                ->andWhere('p.price >= :min')
                ->setParameter('min', $search->min*100);
        }
        if(!empty($search->max)){
            $query = $query
                ->andWhere('p.price <= :max')
                ->setParameter('max', $search->max*100);
        }

        if(!empty($search->boys)){
            $query = $query
                ->andWhere('b.id IN (:boys)')
                ->setParameter('boys', $search->boys);
        }
        return $query->getQuery()->getResult();
    }

    public function findSearchBaby(SearchData $search):array
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('bb', 'p')
            ->join('p.baby', 'bb');
        if(!empty($search->bebe)) {
            $query = $query
                ->andWhere('bb.name LIKE :bebe')
                ->setParameter('bebe', "%{$search->bebe}%");
        }
        // Recherche par prix minimum et maximum
        if(!empty($search->min)){
            $query = $query
                ->andWhere('p.price >= :min')
                ->setParameter('min', $search->min*100);
        }
        if(!empty($search->max)){
            $query = $query
                ->andWhere('p.price <= :max')
                ->setParameter('max', $search->max*100);
        }

        if(!empty($search->babies)){
            $query = $query
                ->andWhere('bb.id IN (:babies)')
                ->setParameter('babies', $search->babies);
        }
        return $query->getQuery()->getResult();
    }

    public function findSearchToy(SearchData $search):array
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('j', 'p')
            ->join('p.toys', 'j');
        if(!empty($search->jouet)) {
            $query = $query
                ->andWhere('j.name LIKE :jouet')
                ->setParameter('jouet', "%{$search->jouet}%");
        }
        // Recherche par prix minimum et maximum
        if(!empty($search->min)){
            $query = $query
                ->andWhere('p.price >= :min')
                ->setParameter('min', $search->min*100);
        }
        if(!empty($search->max)){
            $query = $query
                ->andWhere('p.price <= :max')
                ->setParameter('max', $search->max*100);
        }

        if(!empty($search->toys)){
            $query = $query
                ->andWhere('j.id IN (:toys)')
                ->setParameter('toys', $search->toys);
        }
        return $query->getQuery()->getResult();
    }
}

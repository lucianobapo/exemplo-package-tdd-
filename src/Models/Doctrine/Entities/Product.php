<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-02-25 22:56:30.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace ErpNET\App\Models\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ErpNET\App\Models\Doctrine\Entities\Product
 *
 * @ORM\Entity(repositoryClass="ProductRepository")
 * @ORM\Table(name="products", indexes={@ORM\Index(name="products_mandante_index", columns={"mandante"}), @ORM\Index(name="products_uom_id_index", columns={"uom_id"}), @ORM\Index(name="products_cost_id_index", columns={"cost_id"}), @ORM\Index(name="products_old_id_index", columns={"old_id"}), @ORM\Index(name="products_deleted_at_index", columns={"deleted_at"})})
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deleted_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $mandante;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true})
     */
    protected $uom_id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true})
     */
    protected $cost_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nome;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $imagem;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cod_fiscal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cod_barra;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $promocao;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $estoque;

    /**
     * @ORM\Column(type="float", precision=8, scale=2, nullable=true, name="valorUnitVenda")
     */
    protected $valorUnitVenda;

    /**
     * @ORM\Column(type="float", precision=8, scale=2, nullable=true, name="valorUnitVendaPromocao")
     */
    protected $valorUnitVendaPromocao;

    /**
     * @ORM\Column(type="float", precision=8, scale=2, nullable=true, name="valorUnitCompra")
     */
    protected $valorUnitCompra;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $old_id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned":true})
     */
    protected $estoque_minimo;

    /**
     * @ORM\OneToMany(targetEntity="ItemOrder", mappedBy="product")
     * @ORM\JoinColumn(name="id", referencedColumnName="product_id", nullable=false)
     */
    protected $itemOrders;

    /**
     * @ORM\OneToMany(targetEntity="ProductProductGroup", mappedBy="product")
     * @ORM\JoinColumn(name="id", referencedColumnName="product_id", nullable=false)
     */
    protected $productProductGroups;

    /**
     * @ORM\OneToMany(targetEntity="ProductSharedStat", mappedBy="product")
     * @ORM\JoinColumn(name="id", referencedColumnName="product_id", nullable=false)
     */
    protected $productSharedStats;

    /**
     * @ORM\ManyToOne(targetEntity="SharedUnitOfMeasure", inversedBy="products")
     * @ORM\JoinColumn(name="uom_id", referencedColumnName="id")
     */
    protected $sharedUnitOfMeasure;

    /**
     * @ORM\ManyToOne(targetEntity="CostAllocate", inversedBy="products")
     * @ORM\JoinColumn(name="cost_id", referencedColumnName="id")
     */
    protected $costAllocate;

    public function __construct()
    {
        $this->itemOrders = new ArrayCollection();
        $this->productProductGroups = new ArrayCollection();
        $this->productSharedStats = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of created_at.
     *
     * @param \DateTime $created_at
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of created_at.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of updated_at.
     *
     * @param \DateTime $updated_at
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of updated_at.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of deleted_at.
     *
     * @param \DateTime $deleted_at
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    /**
     * Get the value of deleted_at.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Set the value of mandante.
     *
     * @param string $mandante
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setMandante($mandante)
    {
        $this->mandante = $mandante;

        return $this;
    }

    /**
     * Get the value of mandante.
     *
     * @return string
     */
    public function getMandante()
    {
        return $this->mandante;
    }

    /**
     * Set the value of uom_id.
     *
     * @param integer $uom_id
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setUomId($uom_id)
    {
        $this->uom_id = $uom_id;

        return $this;
    }

    /**
     * Get the value of uom_id.
     *
     * @return integer
     */
    public function getUomId()
    {
        return $this->uom_id;
    }

    /**
     * Set the value of cost_id.
     *
     * @param integer $cost_id
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setCostId($cost_id)
    {
        $this->cost_id = $cost_id;

        return $this;
    }

    /**
     * Get the value of cost_id.
     *
     * @return integer
     */
    public function getCostId()
    {
        return $this->cost_id;
    }

    /**
     * Set the value of nome.
     *
     * @param string $nome
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of imagem.
     *
     * @param string $imagem
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of imagem.
     *
     * @return string
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of cod_fiscal.
     *
     * @param string $cod_fiscal
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setCodFiscal($cod_fiscal)
    {
        $this->cod_fiscal = $cod_fiscal;

        return $this;
    }

    /**
     * Get the value of cod_fiscal.
     *
     * @return string
     */
    public function getCodFiscal()
    {
        return $this->cod_fiscal;
    }

    /**
     * Set the value of cod_barra.
     *
     * @param string $cod_barra
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setCodBarra($cod_barra)
    {
        $this->cod_barra = $cod_barra;

        return $this;
    }

    /**
     * Get the value of cod_barra.
     *
     * @return string
     */
    public function getCodBarra()
    {
        return $this->cod_barra;
    }

    /**
     * Set the value of promocao.
     *
     * @param boolean $promocao
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setPromocao($promocao)
    {
        $this->promocao = $promocao;

        return $this;
    }

    /**
     * Get the value of promocao.
     *
     * @return boolean
     */
    public function getPromocao()
    {
        return $this->promocao;
    }

    /**
     * Set the value of estoque.
     *
     * @param boolean $estoque
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

        return $this;
    }

    /**
     * Get the value of estoque.
     *
     * @return boolean
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * Set the value of valorUnitVenda.
     *
     * @param float $valorUnitVenda
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setValorUnitVenda($valorUnitVenda)
    {
        $this->valorUnitVenda = $valorUnitVenda;

        return $this;
    }

    /**
     * Get the value of valorUnitVenda.
     *
     * @return float
     */
    public function getValorUnitVenda()
    {
        return $this->valorUnitVenda;
    }

    /**
     * Set the value of valorUnitVendaPromocao.
     *
     * @param float $valorUnitVendaPromocao
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setValorUnitVendaPromocao($valorUnitVendaPromocao)
    {
        $this->valorUnitVendaPromocao = $valorUnitVendaPromocao;

        return $this;
    }

    /**
     * Get the value of valorUnitVendaPromocao.
     *
     * @return float
     */
    public function getValorUnitVendaPromocao()
    {
        return $this->valorUnitVendaPromocao;
    }

    /**
     * Set the value of valorUnitCompra.
     *
     * @param float $valorUnitCompra
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setValorUnitCompra($valorUnitCompra)
    {
        $this->valorUnitCompra = $valorUnitCompra;

        return $this;
    }

    /**
     * Get the value of valorUnitCompra.
     *
     * @return float
     */
    public function getValorUnitCompra()
    {
        return $this->valorUnitCompra;
    }

    /**
     * Set the value of old_id.
     *
     * @param integer $old_id
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setOldId($old_id)
    {
        $this->old_id = $old_id;

        return $this;
    }

    /**
     * Get the value of old_id.
     *
     * @return integer
     */
    public function getOldId()
    {
        return $this->old_id;
    }

    /**
     * Set the value of estoque_minimo.
     *
     * @param integer $estoque_minimo
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setEstoqueMinimo($estoque_minimo)
    {
        $this->estoque_minimo = $estoque_minimo;

        return $this;
    }

    /**
     * Get the value of estoque_minimo.
     *
     * @return integer
     */
    public function getEstoqueMinimo()
    {
        return $this->estoque_minimo;
    }

    /**
     * Add ItemOrder entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ItemOrder $itemOrder
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function addItemOrder(ItemOrder $itemOrder)
    {
        $this->itemOrders[] = $itemOrder;

        return $this;
    }

    /**
     * Remove ItemOrder entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ItemOrder $itemOrder
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function removeItemOrder(ItemOrder $itemOrder)
    {
        $this->itemOrders->removeElement($itemOrder);

        return $this;
    }

    /**
     * Get ItemOrder entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemOrders()
    {
        return $this->itemOrders;
    }

    /**
     * Add ProductProductGroup entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ProductProductGroup $productProductGroup
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function addProductProductGroup(ProductProductGroup $productProductGroup)
    {
        $this->productProductGroups[] = $productProductGroup;

        return $this;
    }

    /**
     * Remove ProductProductGroup entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ProductProductGroup $productProductGroup
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function removeProductProductGroup(ProductProductGroup $productProductGroup)
    {
        $this->productProductGroups->removeElement($productProductGroup);

        return $this;
    }

    /**
     * Get ProductProductGroup entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductProductGroups()
    {
        return $this->productProductGroups;
    }

    /**
     * Add ProductSharedStat entity to collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ProductSharedStat $productSharedStat
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function addProductSharedStat(ProductSharedStat $productSharedStat)
    {
        $this->productSharedStats[] = $productSharedStat;

        return $this;
    }

    /**
     * Remove ProductSharedStat entity from collection (one to many).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\ProductSharedStat $productSharedStat
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function removeProductSharedStat(ProductSharedStat $productSharedStat)
    {
        $this->productSharedStats->removeElement($productSharedStat);

        return $this;
    }

    /**
     * Get ProductSharedStat entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductSharedStats()
    {
        return $this->productSharedStats;
    }

    /**
     * Set SharedUnitOfMeasure entity (many to one).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\SharedUnitOfMeasure $sharedUnitOfMeasure
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setSharedUnitOfMeasure(SharedUnitOfMeasure $sharedUnitOfMeasure = null)
    {
        $this->sharedUnitOfMeasure = $sharedUnitOfMeasure;

        return $this;
    }

    /**
     * Get SharedUnitOfMeasure entity (many to one).
     *
     * @return \ErpNET\App\Models\Doctrine\Entities\SharedUnitOfMeasure
     */
    public function getSharedUnitOfMeasure()
    {
        return $this->sharedUnitOfMeasure;
    }

    /**
     * Set CostAllocate entity (many to one).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\CostAllocate $costAllocate
     * @return \ErpNET\App\Models\Doctrine\Entities\Product
     */
    public function setCostAllocate(CostAllocate $costAllocate = null)
    {
        $this->costAllocate = $costAllocate;

        return $this;
    }

    /**
     * Get CostAllocate entity (many to one).
     *
     * @return \ErpNET\App\Models\Doctrine\Entities\CostAllocate
     */
    public function getCostAllocate()
    {
        return $this->costAllocate;
    }

    public function __sleep()
    {
        return array('id', 'created_at', 'updated_at', 'deleted_at', 'mandante', 'uom_id', 'cost_id', 'nome', 'imagem', 'cod_fiscal', 'cod_barra', 'promocao', 'estoque', 'valorUnitVenda', 'valorUnitVendaPromocao', 'valorUnitCompra', 'old_id', 'estoque_minimo');
    }
}
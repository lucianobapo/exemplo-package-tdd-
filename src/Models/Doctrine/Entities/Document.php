<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-02-25 22:56:30.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace ErpNET\App\Models\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErpNET\App\Models\Doctrine\Entities\Document
 *
 * @ORM\Entity(repositoryClass="DocumentRepository")
 * @ORM\Table(name="documents", indexes={@ORM\Index(name="documents_mandante_index", columns={"mandante"}), @ORM\Index(name="documents_partner_id_index", columns={"partner_id"})})
 */
class Document
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
    protected $partner_id;

    /**
     * @ORM\Column(type="string")
     */
    protected $document_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $document_data;

    /**
     * @ORM\ManyToOne(targetEntity="Partner", inversedBy="documents")
     * @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     */
    protected $partner;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
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
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
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
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
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
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
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
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
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
     * Set the value of partner_id.
     *
     * @param integer $partner_id
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
     */
    public function setPartnerId($partner_id)
    {
        $this->partner_id = $partner_id;

        return $this;
    }

    /**
     * Get the value of partner_id.
     *
     * @return integer
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * Set the value of document_type.
     *
     * @param string $document_type
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
     */
    public function setDocumentType($document_type)
    {
        $this->document_type = $document_type;

        return $this;
    }

    /**
     * Get the value of document_type.
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->document_type;
    }

    /**
     * Set the value of document_data.
     *
     * @param string $document_data
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
     */
    public function setDocumentData($document_data)
    {
        $this->document_data = $document_data;

        return $this;
    }

    /**
     * Get the value of document_data.
     *
     * @return string
     */
    public function getDocumentData()
    {
        return $this->document_data;
    }

    /**
     * Set Partner entity (many to one).
     *
     * @param \ErpNET\App\Models\Doctrine\Entities\Partner $partner
     * @return \ErpNET\App\Models\Doctrine\Entities\Document
     */
    public function setPartner(Partner $partner = null)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get Partner entity (many to one).
     *
     * @return \ErpNET\App\Models\Doctrine\Entities\Partner
     */
    public function getPartner()
    {
        return $this->partner;
    }

    public function __sleep()
    {
        return array('id', 'created_at', 'updated_at', 'deleted_at', 'mandante', 'partner_id', 'document_type', 'document_data');
    }
}
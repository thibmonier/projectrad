<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
roject
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project
{
	
	
	/**
	* @var int
		 *
		 * @ORM\Column(name="id", type="integer")
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		private $id;
	
	
	/**
	* @var string
		 *
		 * @ORM\Column(name="name", type="string", length=255, unique=true)
		 */
		private $name;
	
	
	/**
	* @var string
		 *
		 * @ORM\Column(name="longname", type="string", length=255)
		 */
		private $longname;
	
	
	/**
	* @var Client
		 * 
		 * @ORM\ManyToOne(targetEntity="Client")
		 * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
		 */
		private $client;
	
	
	
	
	
	/**
	* Get id
			     *
			     * @return int
			     */
			    public function getId()
			    {
		return $this->id;
	}
	
	
	
	
	/**
	* Set name
			     *
			     * @param string $name
			     *
			     * @return Project
			     */
			    public function setName($name)
			    {
		$this->name = $name;
		
		return $this;
	}
	
	
	
	
	/**
	* Get name
			     *
			     * @return string
			     */
			    public function getName()
			    {
		return $this->name;
	}
	
	
	
	
	/**
	* Set longname
			     *
			     * @param string $longname
			     *
			     * @return Project
			     */
			    public function setLongname($longname)
			    {
		$this->longname = $longname;
		
		return $this;
	}
	
	
	
	
	/**
	* Get longname
			     *
			     * @return string
			     */
			    public function getLongname()
			    {
		return $this->longname;
	}
	
	
	
	
	/**
	* Set Client
			     *
			     * @param string $client
			     *
			     * @return Project
			     */
			    public function setClient($client)
			    {
		$this->client = $client;
		
		return $this;
	}
	
	
	
	
	/**
	* Get Client
			     *
			     * @return Client
			     */
			    public function getClient()
			    {
		return $this->client;
	}
}


<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_no", type="string", length=10, nullable=false)
     */
    private $contactNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Usergroups
     *
     * @ORM\ManyToOne(targetEntity="Usergroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usergroup", referencedColumnName="id")
     * })
     */
    private $usergroup;

    /**
     * @var \Userdata
     *
     * @ORM\ManyToOne(targetEntity="Userdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userdata_id", referencedColumnName="id")
     * })
     */
    private $userdata;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     * @return Users
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    
        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Users
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set usergroup
     *
     * @param \Usergroups $usergroup
     * @return Users
     */
    public function setUsergroup(\Usergroups $usergroup = null)
    {
        $this->usergroup = $usergroup;
    
        return $this;
    }

    /**
     * Get usergroup
     *
     * @return \Usergroups 
     */
    public function getUsergroup()
    {
        return $this->usergroup;
    }

    /**
     * Set userdata
     *
     * @param \Userdata $userdata
     * @return Users
     */
    public function setUserdata(\Userdata $userdata = null)
    {
        $this->userdata = $userdata;
    
        return $this;
    }

    /**
     * Get userdata
     *
     * @return \Userdata 
     */
    public function getUserdata()
    {
        return $this->userdata;
    }
}
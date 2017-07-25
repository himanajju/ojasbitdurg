<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Userdata
 *
 * @ORM\Table(name="userdata")
 * @ORM\Entity
 */
class Userdata
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="admission_no", type="string", length=14, nullable=false)
     */
    private $admissionNo;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="semester", type="string", length=12, nullable=false)
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=100, nullable=false)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="course", type="string", length=100, nullable=false)
     */
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="is_registered", type="string", nullable=false)
     */
    private $isRegistered;



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
     * Set name
     *
     * @param string $name
     * @return Userdata
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
     * Set admissionNo
     *
     * @param string $admissionNo
     * @return Userdata
     */
    public function setAdmissionNo($admissionNo)
    {
        $this->admissionNo = $admissionNo;
    
        return $this;
    }

    /**
     * Get admissionNo
     *
     * @return string 
     */
    public function getAdmissionNo()
    {
        return $this->admissionNo;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Userdata
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set semester
     *
     * @param string $semester
     * @return Userdata
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;
    
        return $this;
    }

    /**
     * Get semester
     *
     * @return string 
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set branch
     *
     * @param string $branch
     * @return Userdata
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
    
        return $this;
    }

    /**
     * Get branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set course
     *
     * @param string $course
     * @return Userdata
     */
    public function setCourse($course)
    {
        $this->course = $course;
    
        return $this;
    }

    /**
     * Get course
     *
     * @return string 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set isRegistered
     *
     * @param string $isRegistered
     * @return Userdata
     */
    public function setIsRegistered($isRegistered)
    {
        $this->isRegistered = $isRegistered;
    
        return $this;
    }

    /**
     * Get isRegistered
     *
     * @return string 
     */
    public function getIsRegistered()
    {
        return $this->isRegistered;
    }
}
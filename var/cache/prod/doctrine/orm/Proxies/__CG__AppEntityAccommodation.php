<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Accommodation extends \App\Entity\Accommodation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'zipCode', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'nbSleeping', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'capacityAdult', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'capacityChild', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'equipement', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'service', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'activity', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'typeAccommodation', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'availablities', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'reviews', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'bookings', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'imagesPath', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'file', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'imageUrl', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'updateAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'zipCode', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'nbSleeping', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'capacityAdult', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'capacityChild', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'equipement', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'service', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'activity', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'typeAccommodation', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'availablities', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'reviews', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'bookings', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'imagesPath', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'file', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'imageUrl', '' . "\0" . 'App\\Entity\\Accommodation' . "\0" . 'updateAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Accommodation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(int $price): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', []);

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface(int $surface): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', [$surface]);

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', []);

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode(string $zipCode): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', [$zipCode]);

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbSleeping(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbSleeping', []);

        return parent::getNbSleeping();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbSleeping(int $nbSleeping): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbSleeping', [$nbSleeping]);

        return parent::setNbSleeping($nbSleeping);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacityAdult(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacityAdult', []);

        return parent::getCapacityAdult();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacityAdult(int $capacityAdult): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacityAdult', [$capacityAdult]);

        return parent::setCapacityAdult($capacityAdult);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacityChild(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacityChild', []);

        return parent::getCapacityChild();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacityChild(int $capacityChild): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacityChild', [$capacityChild]);

        return parent::setCapacityChild($capacityChild);
    }

    /**
     * {@inheritDoc}
     */
    public function getEquipement(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEquipement', []);

        return parent::getEquipement();
    }

    /**
     * {@inheritDoc}
     */
    public function addEquipement(\App\Entity\Equipement $equipement): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEquipement', [$equipement]);

        return parent::addEquipement($equipement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEquipement(\App\Entity\Equipement $equipement): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEquipement', [$equipement]);

        return parent::removeEquipement($equipement);
    }

    /**
     * {@inheritDoc}
     */
    public function getService(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', []);

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function addService(\App\Entity\Service $service): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addService', [$service]);

        return parent::addService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function removeService(\App\Entity\Service $service): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeService', [$service]);

        return parent::removeService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivity(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivity', []);

        return parent::getActivity();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivity(\App\Entity\Activity $activity): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivity', [$activity]);

        return parent::addActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivity(\App\Entity\Activity $activity): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivity', [$activity]);

        return parent::removeActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeAccommodation(): ?\App\Entity\TypeAccommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeAccommodation', []);

        return parent::getTypeAccommodation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeAccommodation(?\App\Entity\TypeAccommodation $typeAccommodation): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeAccommodation', [$typeAccommodation]);

        return parent::setTypeAccommodation($typeAccommodation);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailablities(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailablities', []);

        return parent::getAvailablities();
    }

    /**
     * {@inheritDoc}
     */
    public function addAvailablity(\App\Entity\Availablity $availablity): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAvailablity', [$availablity]);

        return parent::addAvailablity($availablity);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAvailablity(\App\Entity\Availablity $availablity): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAvailablity', [$availablity]);

        return parent::removeAvailablity($availablity);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviews(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviews', []);

        return parent::getReviews();
    }

    /**
     * {@inheritDoc}
     */
    public function addReview(\App\Entity\Review $review): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReview', [$review]);

        return parent::addReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReview(\App\Entity\Review $review): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReview', [$review]);

        return parent::removeReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getBookings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBookings', []);

        return parent::getBookings();
    }

    /**
     * {@inheritDoc}
     */
    public function addBooking(\App\Entity\Booking $booking): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBooking', [$booking]);

        return parent::addBooking($booking);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBooking(\App\Entity\Booking $booking): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBooking', [$booking]);

        return parent::removeBooking($booking);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?\App\Entity\region
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(?\App\Entity\region $region): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\File $file): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagesPath(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagesPath', []);

        return parent::getImagesPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagesPath(?string $imagesPath): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagesPath', [$imagesPath]);

        return parent::setImagesPath($imagesPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateAt', []);

        return parent::getUpdateAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAt(?\DateTimeInterface $updateAt): \App\Entity\Accommodation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAt', [$updateAt]);

        return parent::setUpdateAt($updateAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl($imageUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', [$imageUrl]);

        return parent::setImageUrl($imageUrl);
    }

}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{_locale<%app.supported_locales%>}", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
         'current_page' => 'index',
        ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/communique", name="communique")
     */
/*    public function communique()
    {
        return $this->render('default/communique.html.twig', [
         'current_page' => 'communique',
        ]);
    }*/
    /**
     * @Route("/{_locale<%app.supported_locales%>}/nouveautes", name="news")
     */
    public function news()
    {
      return $this->render('default/news.html.twig', [
       'current_page' => 'news',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/nos_bus/nos_bus_mini/{bus_name}", name="bus_mini")
     */
    public function bus_mini($bus_name)
    {
      return $this->render('default/bus_mini.html.twig', [
       'current_page' => 'bus_mini',
        'selected'    => $bus_name
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/nos_bus/nos_bus_simples/{bus_name}", name="bus_simple")
     */
    public function bus_simple($bus_name)
    {
      return $this->render('default/bus_simple.html.twig', [
       'current_page' => 'bus_simple',
       'selected'    => $bus_name
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/nos_bus/nos_bus_doubles/{bus_name}", name="bus_double")
     */
    public function bus_double($bus_name)
    {
      return $this->render('default/bus_double.html.twig', [
       'current_page' => 'bus_double',
       'selected'    => $bus_name
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/tarifs", name="tarifs")
     */
    public function tarifs()
    {
      return $this->render('default/tarifs.html.twig', [
       'current_page' => 'tarifs',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/services", name="services")
     */
    public function services()
    {
      return $this->render('default/services.html.twig', [
       'current_page' => 'services',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/services/inclus", name="services_inclus")
     */
    public function services_inclus()
    {
      return $this->render('default/services_inclus.html.twig', [
       'current_page' => 'services_inclus',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/services/option", name="services_option")
     */
    public function services_option()
    {
      return $this->render('default/services_option.html.twig', [
       'current_page' => 'services_option',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/qui_sommes_nous", name="qui_sommes_nous")
     */
    public function qui_sommes_nous()
    {
      return $this->render('default/qui_sommes_nous.html.twig', [
       'current_page' => 'qui_sommes_nous',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/qui_sont_ils", name="qui_sont_ils")
     */
    public function qui_sont_ils()
    {
      return $this->render('default/qui_sont_ils.html.twig', [
       'current_page' => 'qui_sont_ils',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/comparer", name="qui_sommes_nous")
     */
    public function comparer()
    {
      return $this->render('default/comparer.html.twig', [
       'current_page' => 'comparer',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/reservation", name="reservation")
     */
    public function reservation()
    {
      return $this->render('default/reservation.html.twig', [
       'current_page' => 'reservation',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/roadvertising", name="roadvertising")
     */
    public function roadvertising()
    {
      return $this->render('default/roadvertising.html.twig', [
       'current_page' => 'roadvertising',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/parcours", name="parcours")
     */
    public function parcours()
    {
      return $this->render('default/parcours.html.twig', [
       'current_page' => 'parcours',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/location-soiree-bus-paris", name="bottom1")
     */
    public function bottom1()
    {
      return $this->render('default/bottom1.html.twig', [
       'current_page' => 'bottom1',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/soiree-bus-a-paris-garantie", name="bottom2")
     */
    public function bottom2()
    {
      return $this->render('default/bottom2.html.twig', [
       'current_page' => 'bottom2',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/location-de-bus-boite-de-nuit", name="bottom3")
     */
    public function bottom3()
    {
      return $this->render('default/bottom3.html.twig', [
       'current_page' => 'bottom3',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/notre-parc-de-discobus", name="bottom4")
     */
    public function bottom4()
    {
      return $this->render('default/bottom4.html.twig', [
       'current_page' => 'bottom4',
      ]);
    }
    /**
     * @Route("/{_locale<%app.supported_locales%>}/pourquoi-louer-un-busdiscotheque", name="bottom5")
     */
    public function bottom5()
    {
      return $this->render('default/bottom5.html.twig', [
       'current_page' => 'bottom5',
      ]);
    }
}

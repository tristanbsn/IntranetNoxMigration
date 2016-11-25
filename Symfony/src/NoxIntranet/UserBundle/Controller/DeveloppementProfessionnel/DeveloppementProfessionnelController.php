<?php

namespace NoxIntranet\UserBundle\Controller\DeveloppementProfessionnel;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DeveloppementProfessionnelController extends Controller {

    public function formulaireDeveloppementProfessionnelAction() {
        // On récupére le collaborateur courant.
        $collaborateur = $this->get('security.context')->getToken()->getUser();

        // On récupére son entitée hiérarchique.
        $em = $this->getDoctrine()->getManager();
        $collaborateurHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());

        // Tableau des question/choix.
        $questions = array(
            1 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment ai-je vécu cette année ?', 'Taille' => 30),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Que retenez-vous de cette année ?', 'Taille' => 30)
            ),
            2 => array(
                'Neutre' => array('Type' => 'Texte', 'Question' => 'Mission principale : Décrivez la mission principale', 'Taille' => 5)
            ),
            3 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quels résultats ai-je obtenus ?', 'Taille' => 20),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenu ?', 'Taille' => 20)
            ),
            4 => array(
                'Collaborateur' => array('Type' => 'Choix', 'Question' => 'Sélectionnez le niveau de maîtrise du poste : (*note explicative)', 'Choix' =>
                    array(
                        'Construction', 'Adéquation', 'Maîtrise', 'Excellence'
                    )
                ),
                'Manager' => array('Type' => 'Choix', 'Question' => 'Sélectionnez le niveau de maîtrise du poste : (*note explicative)', 'Choix' =>
                    array(
                        'Construction', 'Adéquation', 'Maîtrise', 'Excellence'
                    )
                )
            ),
            5 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles difficultés ai-je rencontrées ?', 'Taille' => 10),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?', 'Taille' => 10)
            ),
            6 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont mes réussites et apports pour le Groupe ?', 'Taille' => 10),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?', 'Taille' => 10)
            ),
            7 => array(
                'Neutre' => array('Type' => 'Texte', 'Question' => "Objectif 1 : Décrivez l'objectif")
            ),
            8 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenus ?')
            ),
            9 => array(
                'Manager' => array('Type' => 'Choix', 'Question' => "Sélectionnez le niveau d'atteinte de l'objectif", 'Choix' =>
                    array(
                        'Non atteint', 'Partiellement atteint', 'Atteint', 'Dépassé'
                    )
                )
            ),
            10 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?')
            ),
            11 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?')
            ),
            12 => array(
                'Neutre' => array('Type' => 'Texte', 'Question' => "Objectif 2 : Décrivez l'objectif")
            ),
            13 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenus ?')
            ),
            14 => array(
                'Manager' => array('Type' => 'Choix', 'Question' => "Sélectionnez le niveau d'atteinte de l'objectif", 'Choix' =>
                    array(
                        'Non atteint', 'Partiellement atteint', 'Atteint', 'Dépassé'
                    )
                )
            ),
            15 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?')
            ),
            15 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?')
            ),
            16 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment estimez-vous votre charge de travail ? Impacte-elle votre vie personnelle ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les facteurs d’aggravation ou d’amélioration de la situation ?')
            ),
            17 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont les solutions pour pallier aux éventuelles difficultés ?'),
            ),
            18 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les situations de travail source de motivation et sources de frustration ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les zones de confort et d’inconfort dans le poste ?')
            ),
            19 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont mes forces ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les forces à valoriser ?')
            ),
            20 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles formations ont été suivies cette année ?')
            ),
            21 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les acquis cette année ?')
            ),
            22 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quels sont mes axes d’amélioration ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les axes d’amélioration sur lesquels il faut travailler ?')
            ),
            23 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels vont être les impacts de l’évolution du métier sur le poste du collaborateur ?')
            ),
            24 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles autres missions/activités seraient susceptibles de l’intéresser et de lui être confiées ?')
            ),
            25 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment vous voyez-vous à CT (0/2 ans) ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Avis hiérarchie')
            ),
            26 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment vous voyez-vous à MT (3/5 ans) ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Avis hiérarchie')
            ),
            27 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Nationale/Internationale'),
            ),
            28 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Région/Pays'),
            ),
            29 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quel est mon niveau en langue ?'),
            ),
            30 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Les objectifs que je me fixe ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Les objectifs complémentaires fixés par le manager ?')
            ),
            31 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "En quoi mon manager peut-il m'aider ?"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles actions doivent être mises en oeuvre pour accompagner les changements ?')
            ),
            32 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Quels sont mes besoins en formation ?"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles formations sont à prévoir ? Indiquez les niveaux de priorité ?')
            ),
            33 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Synthèse et commentaires du collaborateur"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Synthèse et commentaires du manager')
            ),
            34 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Signature collaborateur"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Signature manager')
            ),
            35 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Signature N+2 (Nom, prénom, date, signature)"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Signature DRH (Nom, prénom, date, signature)')
            ),
        );

        $formDeveloppementProfessionnelBuilder = $this->createFormBuilder();
        $formDeveloppementProfessionnelBuilder
                ->add('Nom', TextType::class, array(
                    'data' => $collaborateur->getLastname(),
                    'attr' => array(
                        'readonly' => 'readonly'
                    ),
                    'label' => 'Nom : '
                ))
                ->add('Prenom', TextType::class, array(
                    'data' => $collaborateur->getFirstname(),
                    'label' => 'Prénom : ',
                    'attr' => array(
                        'readonly' => 'readonly'
                    )
                ))
                ->add('Age', IntegerType::class, array(
                    'label' => 'Age : ',
                    'attr' => array(
                        'min' => 1
                    )
                ))
                ->add("DateAncienneteGroupe", DateType::class, array(
                    'label' => "Date d'ancienneté Groupe : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => new \DateTime
                ))
                ->add('Entite', TextType::class, array(
                    'label' => 'Entité : '
                ))
                ->add('PosteActuel', TextType::class, array(
                    'label' => 'Poste actuel : '
                ))
                ->add("DateAnciennetePoste", DateType::class, array(
                    'label' => "Date d'ancienneté dans le poste : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => new \DateTime
                ))
                ->add("SalaireBrutMensuel", IntegerType::class, array(
                    'label' => "Salaire brut mensuel : ",
                    'attr' => array(
                        'min' => 1
                    )
                ))
                ->add('NomResponsable', TextType::class, array(
                    'label' => "Nom du responsable : "
                ))
                ->add("DateEntretien", DateType::class, array(
                    'label' => "Date de l'entretien : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => new \DateTime
        ));

        foreach ($questions as $key => $question) {
            if (array_key_exists('Collaborateur', $question)) {
                if ($question['Collaborateur']['Type'] === 'Texte') {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', TextareaType::class, array(
                        'attr' => array(
                            'class' => 'collaborateurTextarea'
                        )
                    ));
                } else {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', ChoiceType::class, array(
                        'choices' => $question['Collaborateur']['Choix']
                    ));
                }
            }
            if (array_key_exists('Manager', $question)) {
                if ($question['Manager']['Type'] === 'Texte') {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', TextareaType::class, array(
                        'attr' => array(
                            'class' => 'managerTextarea'
                        )
                    ));
                } else {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', ChoiceType::class, array(
                        'choices' => $question['Manager']['Choix']
                    ));
                }
            }
            if (array_key_exists('Neutre', $question)) {
                $formDeveloppementProfessionnelBuilder->add($key . '_Neutre', TextareaType::class, array(
                ));
            }
        }

        $formDeveloppementProfessionnel = $formDeveloppementProfessionnelBuilder->getForm();

        return $this->render('NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig', array('formulaireDevellopementProfessionnel' => $formDeveloppementProfessionnel->createView(), 'questions' => $questions));
    }

}

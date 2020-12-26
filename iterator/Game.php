<?php

require_once(__DIR__ . '/Guild.php');
require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/models/GameCharacter.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class Game implements ApplicationInterface
{
    public function execute(): void
    {
        $dragonsOfHeaven = $this->craftDragonsOfHeavenGuild();
        $this->showGuildMembers($dragonsOfHeaven);

        $lans = $this->craftLansGuild();
        $this->showGuildMembers($lans);
    }

    protected function showGuildMembers($guild)
    {
        $iterator = $guild->createIterator();

        renderln("Guild " . $guild->getName());

        while ($iterator->hasNext()) {
            $member = $iterator->next();
            renderln($member->getName());
        }

        renderln();
    }

    protected function craftDragonsOfHeavenGuild()
    {
        $dragonsOfHeaven = new Guild('Dragons of Heaven');

        $dragonsOfHeaven->addMember(new GameCharacter('Tuna', 99, 'Knight'));
        $dragonsOfHeaven->addMember(new GameCharacter('Saitama', 99, 'Hero'));
        $dragonsOfHeaven->addMember(new GameCharacter('Krionoah', 99, 'Orc'));

        return $dragonsOfHeaven;
    }

    protected function craftLansGuild()
    {
        $lans = new Guild('LaNs');

        $lans->addMember(new GameCharacter('Mayu', 99, 'Lord Knight'));
        $lans->addMember(new GameCharacter('Meme', 99, 'Priest'));
        $lans->addMember(new GameCharacter('Chompona', 99, 'Champ'));

        return $lans;
    }
}

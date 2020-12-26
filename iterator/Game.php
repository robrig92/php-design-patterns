<?php

require_once(__DIR__ . '/Guild.php');
require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/models/GameCharacter.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class Game implements ApplicationInterface
{
    public function execute(): void
    {
        $dragonsOfHeaven = new Guild('Dragons of Heaven');

        $dragonsOfHeaven->addMember(new GameCharacter('Tuna', 99, 'Knight'));
        $dragonsOfHeaven->addMember(new GameCharacter('Saitama', 99, 'Hero'));
        $dragonsOfHeaven->addMember(new GameCharacter('Krionoah', 99, 'Orc'));

        $this->showGuildMembers($dragonsOfHeaven);
    }

    protected function showGuildMembers($guild)
    {
        $iterator = $guild->createIterator();

        renderln($guild->getName());

        while ($iterator->hasNext()) {
            $member = $iterator->next();
            renderln($member->getName());
        }
    }
}

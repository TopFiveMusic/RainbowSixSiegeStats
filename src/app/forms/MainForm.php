<?php
namespace app\forms;

use php\jsoup\Jsoup;
use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
        $username = $this->edit->text;
        $platform = $this->comboboxAlt->value;
        $this->form('MainForm')->title = "Rainbow Six Siege | Stats | $username";
        if ($platform == 'Xbox One'){
            $xone = Jsoup::connect("https://r6stats.com/stats/xone/$username/casual")->get();
            $killsxone = $xone->select('body > div > div:nth-child(3) > div:nth-child(1) > div > div.value')->text(); // Kill
            $deathsxone = $xone->select('body > div > div:nth-child(3) > div:nth-child(2) > div > div.value')->text(); // Death
            $kdxone = $xone->select('body > div > div:nth-child(3) > div:nth-child(3) > div > div.value')->text(); // K/D
            $winslossesxone = $xone->select('body > div > div.row.stats.second > div:nth-child(1) > div > div.value')->text(); // Wins - Losses
            $levelupxone = $xone->select('body > div > div.row.stats.second > div:nth-child(3) > div > div.value')->text(); // Level Up
            $playtimexone = $xone->select('body > div > div:nth-child(3) > div:nth-child(4) > div > div.value')->text(); // PlayTime
            $winxone = $xone->select('body > div > div.row.stats.second > div:nth-child(2) > div > div.value')->text(); // Win %
            $levelxone = $xone->select('body > div > div.row.stats.second > div:nth-child(4) > div > div.value')->text(); // Level
            //---[Overall Stats]---//
            $revivesxone = $xone->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Revives 
            $suicidesxone = $xone->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Suicides 
            $RDxone = $xone->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Reinforcements Deployed
            $BDxone = $xone->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Barricades Deployed
            $BRRxone = $xone->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Barricades : Reinforcements Ratio
            //---[Weapon Based Stats]---//
            $MKxone = $xone->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Melee Kills 
            $Accuracyxone = $xone->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Accuracy 
            $HSxone = $xone->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Head Shot 
            $KAxone = $xone->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Kill Assists
            $PKxone = $xone->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Penetration Kills
            //---[Add Elements to the Form]---///
            $this->kills->text = "Kills: $killsxone";
            $this->deaths->text = "Deaths: $deathsxone";
            $this->kd->text = "K/D: $kdxone";
            $this->wl->text = "Wins - Losses: $winslossesxone";
            $this->lu->text = "Level Up: $levelupxone";
            $this->playtime->text = "Playtime: $playtimexone";
            $this->win->text = "Win %: $winxone";
            $this->level->text = "Level: $levelxone";
            $this->Revives->text = "Revives: $revivesxone";
            $this->Suicides->text = "Suicides: $suicidesxone";
            $this->ReinforcementsDeployed->text = "Reinforcements Deployed: $RDxone";
            $this->BarricadesDeployed->text = "Barricades Deployed: $BDxone";
            $this->BarricadesReinforcementsRatio->text = "Barricades : Reinforcements Ratio: $BRRxone";
            $this->MeleeKills->text = "Melee Kills: $MKxone";
            $this->Accuracy->text = "Accuracy: $Accuracyxone";
            $this->HeadShot->text = "Head Shot %: $HSxone";
            $this->KillAssists->text = "Kill Assists: $KAxone";
            $this->PenetrationKills->text = "Penetration Kills: $PKxone";
        }
        if ($platform == 'PS4'){
            $ps4 = Jsoup::connect("https://r6stats.com/stats/ps4/$username/casual")->get();
            $killsps4 = $ps4->select('body > div > div:nth-child(3) > div:nth-child(1) > div > div.value')->text(); // Kill
            $deathsps4 = $ps4->select('body > div > div:nth-child(3) > div:nth-child(2) > div > div.value')->text(); // Death
            $kdps4 = $ps4->select('body > div > div:nth-child(3) > div:nth-child(3) > div > div.value')->text(); // K/D
            $winslossesps4 = $ps4->select('body > div > div.row.stats.second > div:nth-child(1) > div > div.value')->text(); // Wins - Losses
            $levelupps4 = $ps4->select('body > div > div.row.stats.second > div:nth-child(3) > div > div.value')->text(); // Level Up
            $playtimeps4 = $ps4->select('body > div > div:nth-child(3) > div:nth-child(4) > div > div.value')->text(); // PlayTime
            $winps4 = $ps4->select('body > div > div.row.stats.second > div:nth-child(2) > div > div.value')->text(); // Win %
            $levelps4 = $ps4->select('body > div > div.row.stats.second > div:nth-child(4) > div > div.value')->text(); // Level
            //---[Overall Stats]---//
            $revivesps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Revives 
            $suicidesps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Suicides 
            $RDps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Reinforcements Deployed
            $BDps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Barricades Deployed
            $BRRps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Barricades : Reinforcements Ratio
            //---[Weapon Based Stats]---//
            $MKps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Melee Kills 
            $Accuracyps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Accuracy 
            $HSps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Head Shot 
            $KAps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Kill Assists
            $PKps4 = $ps4->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Penetration Kills
            //---[Add Elements to the Form]---///
            $this->kills->text = "Kills: $killsps4";
            $this->deaths->text = "Deaths: $deathsps4";
            $this->kd->text = "K/D: $kdps4";
            $this->wl->text = "Wins - Losses: $winslossesps4";
            $this->lu->text = "Level Up: $levelupps4";
            $this->playtime->text = "Playtime: $playtimeps4";
            $this->win->text = "Win %: $winps4";
            $this->level->text = "Level: $levelps4";
            $this->Revives->text = "Revives: $revivesps4";
            $this->Suicides->text = "Suicides: $suicidesps4";
            $this->ReinforcementsDeployed->text = "Reinforcements Deployed: $RDps4";
            $this->BarricadesDeployed->text = "Barricades Deployed: $BDps4";
            $this->BarricadesReinforcementsRatio->text = "Barricades : Reinforcements Ratio: $BRRps4";
            $this->MeleeKills->text = "Melee Kills: $MKps4";
            $this->Accuracy->text = "Accuracy: $Accuracyps4";
            $this->HeadShot->text = "Head Shot %: $HSps4";
            $this->KillAssists->text = "Kill Assists: $KAps4";
            $this->PenetrationKills->text = "Penetration Kills: $PKps4";
        }
        if ($platform == 'PC'){
            $pc = Jsoup::connect("https://r6stats.com/stats/uplay/$username/casual")->get();
            $killspc = $pc->select('body > div > div:nth-child(3) > div:nth-child(1) > div > div.value')->text(); // Kill
            $deathspc = $pc->select('body > div > div:nth-child(3) > div:nth-child(2) > div > div.value')->text(); // Death
            $kdpc = $pc->select('body > div > div:nth-child(3) > div:nth-child(3) > div > div.value')->text(); // K/D
            $winslossespc = $pc->select('body > div > div.row.stats.second > div:nth-child(1) > div > div.value')->text(); // Wins - Losses
            $leveluppc = $pc->select('body > div > div.row.stats.second > div:nth-child(3) > div > div.value')->text(); // Level Up
            $playtimepc = $pc->select('body > div > div:nth-child(3) > div:nth-child(4) > div > div.value')->text(); // PlayTime
            $winpc = $pc->select('body > div > div.row.stats.second > div:nth-child(2) > div > div.value')->text(); // Win %
            $levelpc = $pc->select('body > div > div.row.stats.second > div:nth-child(4) > div > div.value')->text(); // Level
            //---[Overall Stats]---//
            $revivespc = $pc->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Revives 
            $suicidespc = $pc->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Suicides 
            $RDpc = $pc->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Reinforcements Deployed
            $BDpc = $pc->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Barricades Deployed
            $BRRpc = $pc->select('body > div > div.row.general-stats > div:nth-child(1) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Barricades : Reinforcements Ratio
            //---[Weapon Based Stats]---//
            $MKpc = $pc->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(1) > td:nth-child(2)')->text(); // Melee Kills 
            $Accuracypc = $pc->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(2) > td:nth-child(2)')->text(); // Accuracy 
            $HSpc = $pc->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(3) > td:nth-child(2)')->text(); // Head Shot 
            $KApc = $pc->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(4) > td:nth-child(2)')->text(); // Kill Assists
            $PKpc = $pc->select('body > div > div.row.general-stats > div:nth-child(2) > div > table > tbody > tr:nth-child(5) > td:nth-child(2)')->text(); // Penetration Kills
            //---[Add Elements to the Form]---///
            $this->kills->text = "Kills: $killspc";
            $this->deaths->text = "Deaths: $deathspc";
            $this->kd->text = "K/D: $kdpc";
            $this->wl->text = "Wins - Losses: $winslossespc";
            $this->lu->text = "Level Up: $leveluppc";
            $this->playtime->text = "Playtime: $playtimepc";
            $this->win->text = "Win %: $winpc";
            $this->level->text = "Level: $levelpc";
            $this->Revives->text = "Revives: $revivespc";
            $this->Suicides->text = "Suicides: $suicidespc";
            $this->ReinforcementsDeployed->text = "Reinforcements Deployed: $RDpc";
            $this->BarricadesDeployed->text = "Barricades Deployed: $BDpc";
            $this->BarricadesReinforcementsRatio->text = "Barricades : Reinforcements Ratio: $BRRpc";
            $this->MeleeKills->text = "Melee Kills: $MKpc";
            $this->Accuracy->text = "Accuracy: $Accuracypc";
            $this->HeadShot->text = "Head Shot %: $HSpc";
            $this->KillAssists->text = "Kill Assists: $KApc";
            $this->PenetrationKills->text = "Penetration Kills: $PKpc";
        }
        if ($platform == ''){
            $message = new UXTrayNotification;
            $message->title = 'Platform';
            $message->message = 'Select a search platform';
            $message->notificationType = 'WARNING';
            $message->location = 'TOP_RIGHT';
            $message->animationType = 'POPUP';
            $message->show();
        }
        if ($username == ''){
            $message1 = new UXTrayNotification;
            $message1->title = 'Username';
            $message1->message = 'Enter Username';
            $message1->notificationType = 'WARNING';
            $message1->location = 'TOP_RIGHT';
            $message1->animationType = 'POPUP';
            $message1->show();
        }
    }

    /**
     * @event close 
     */
    function doClose(UXWindowEvent $e = null)
    {    
        app()->shutdown();
    }

}

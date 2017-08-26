<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Service;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Statistic\StatisticsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Statistic\StatisticValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class StatisticService
{
    /**
     * @param $statistics
     *
     * @return StatisticsValueObject
     */
    public function getStatistics($statistics)
    {
        $categoryStatistics = [];
        if (isset($statistics->statistics)) {
            $categoryStatistics = $this->getCategoryStatistics($statistics->statistics);
        }

        $statisticsSubCategories = [];
        if (isset($statistics->subCategories)) {
            $statisticsSubCategories = $this->getStatisticsSubCategories($statistics->subCategories);
        }

        $statisticsValueObject =  new StatisticsValueObject(
            $statistics->id,
            $statistics->name,
            $statisticsSubCategories,
            $categoryStatistics
        );

        return $statisticsValueObject;
    }

    /**
     * @param $subCategories
     *
     * @return StatisticsValueObject[]
     */
    private function getStatisticsSubCategories($subCategories)
    {
        $categories = [];
        foreach ($subCategories as $subCategory) {
            $categories[] = $this->getStatistics($subCategory);
        }
        return $categories;
    }

    /**
     * @param $statistics
     *
     * @return StatisticValueObject[]
     */
    private function getCategoryStatistics($statistics)
    {
        $categoryStatistics = [];
        foreach ($statistics as $statistic) {
            $highest = "";
            if (isset($statistic->highest)) {
                $highest = $statistic->highest;
            }

            $categoryStatistics[] = new StatisticValueObject(
                $statistic->id,
                $statistic->name,
                $statistic->quantity,
                $statistic->lastUpdated,
                $statistic->money,
                $highest
            );
        }

        return $categoryStatistics;
    }
}
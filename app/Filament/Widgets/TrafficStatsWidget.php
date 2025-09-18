<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Traffic;
use App\Models\Comment;

class TrafficStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalViews = Traffic::count();
        $uniqueVisitors = Traffic::distinct('session_id')->count('session_id');
        $totalComments = Comment::count();

        return [
            Stat::make('Total Page Views', $totalViews)
                ->description('Total visits to public pages')
                ->descriptionIcon('heroicon-m-eye')
                ->color('success'),
            Stat::make('Unique Visitors', $uniqueVisitors)
                ->description('Unique sessions')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('Total Comments', $totalComments)
                ->description('Total comments received')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('warning'),
        ];
    }
}

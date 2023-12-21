<?php

namespace App\Console\Commands;

use App\Models\Essay;
use App\Models\Grammer;
use App\Models\Page;
use App\Models\Phrase;
use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('starting to generat sitemap');
        $this->line('...');
        $this->line('.....');

        $date = Carbon::now();

        Sitemap::create()
            ->add(Url::create('/')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
                ->setPriority(0.9))
            ->add(Url::create('/contact-us')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
                ->setPriority(0.9))
            ->add(Url::create('/privacy-policy')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
                ->setPriority(0.9))
            ->add(Url::create('/english-to-assamese')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
                ->setPriority(0.9))
            ->add(Url::create('/assamese-to-english')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
                ->setPriority(0.9))
            ->add(Url::create('/kids-playstream')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9))
            ->add(Url::create('/daily-facts')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9))
            ->add(Url::create('/quiz')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9))
            ->add(Url::create('/essays')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9))
            ->add(Url::create('/phrases')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.9))
            ->add(Url::create('/grammer')
                ->setLastModificationDate($date)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.9))
            ->add(Essay::all())
            ->add(Grammer::all())
            ->add(Phrase::all())
            ->add(Page::all())
            ->writeToFile(public_path('sitemap.xml'));

        $this->line('.......');
        $this->line('.........');

        $this->newLine();

        $this->info('sitemap generated successfully!');
    }
}

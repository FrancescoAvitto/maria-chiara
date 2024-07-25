<?php

namespace App\Nova;

use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Waynestate\Nova\CKEditor;
use Eminiarts\Tabs\TabsOnEdit;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Eminiarts\Tabs\Traits\HasTabs;
use Benjaminhirsch\NovaSlugField\Slug;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Article extends Resource
{
    // use HasTabs;
    use TabsOnEdit;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Article::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Tabs('Articolo', [
                'Principali' => [
                    ID::make(__('ID'), 'id')->sortable(),
                    TextWithSlug::make(__('Titolo'), 'title')
                        ->sortable()
                        ->rules('required')
                        ->creationRules('unique:articles,title')
                        ->slug('slug'),

                    Slug::make('Slug')
                        ->showUrlPreview('http://www.unaltropaiodimaniche.it'),

                    Text::make(__('Sottotitolo'), 'subtitle')
                        ->rules('required'),

                    Text::make(__('Meta Descrizione'), 'metadescription')
                        ->rules('required'),
                ],
                'Contenuti' => [
                    CKEditor::make(__('Corpo'), 'body')
                        ->hideFromIndex()
                        ->rules('required'),
                ],
                'Pubblicazione' => [
                    Boolean::make(__('Pubblicato'), 'published'),
                    Boolean::make(__('In evidenza'), 'in_evidence'),
                    DateTime::make(__('Creato il'), 'created_at')
                        ->sortable(),
                ],
                'Gallery' => [
                    Images::make(__('Gallery'), 'gallery')
                        ->conversionOnIndexView('mini')
                        ->rules('required', 'max:8'),
                ]

            ]),

            BelongsToMany::make('Tags', 'tags', 'App\Nova\Tag'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    protected static function afterValidation(NovaRequest $request, $validator)
    {
        if($request->in_evidence){
            $articles = \App\Models\Article::where('in_evidence', true)->get();
            if(count($articles)){
                $articles->last()->update(['in_evidence' => false]);
            } 
       }
    }
}

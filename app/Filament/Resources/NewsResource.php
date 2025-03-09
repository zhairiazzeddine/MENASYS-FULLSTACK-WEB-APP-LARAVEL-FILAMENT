<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
 use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Actions\Action;
use Filament\Pages\Page;
use Filament\Forms\Components\Section;
use App\Filament\Resources\fillSlug;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Filters\SelectFilter;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'Actualités';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Actualités')
                ->description('Actualités Section')
                ->schema([
                    TextInput::make('TitreActualité'),
                    MarkdownEditor::make('DescriptionActualité'),
                    Select::make('tag')
                            ->options([
                                'Technologie' => 'Technologie',
                                'Logiciel/Application' => 'Logiciel/Application',
                                'Mise à jour' => 'Mise à jour',
                                'Graphic Design' => 'Graphic Design',
                                'Général' => 'Général',
                                'Récrutement' => 'Récrutement',
                            ]),
                    FileUpload::make('ImageActualité')->disk('public'),
                    DatePicker::make('DatePublication')->default(now()), // Set the default value to the current datetime (SELECT DATE_FORMAT(publishDate, '%d/%m/%Y') FROM news)
                    TimePicker::make('HeurePublication'),
                    Checkbox::make('Publié'),
                    Checkbox::make('Dernière'),
                        ])
                

                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TitreActualité')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('DescriptionActualité')->sortable()->searchable()->toggleable(),
                Tables\Columns\ImageColumn::make('ImageActualité')->disk('public')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('DatePublication')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('HeurePublication')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('tag')->sortable()->searchable()->toggleable(),
                CheckboxColumn::make('Publié')->sortable()->searchable()->toggleable(),
                CheckboxColumn::make('Dernière')->sortable()->searchable()->toggleable(),
            ])
            ->filters([
                SelectFilter::make('published')
                ->options([
                            '0' => '0',
                            'reviewing' => 'Reviewing',
                            'published' => 'Published',
    ])
            ])
            ->actions([
                
                
                ActionGroup::make([ ViewAction::make(),EditAction::make(), DeleteAction::make(),]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}

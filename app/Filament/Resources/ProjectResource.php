<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = 'Portfolio';

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->autofocus()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->label('Website URL')
                    ->url()
                    ->maxLength(255)
                    ->suffixIcon('heroicon-m-globe-alt'),
                Forms\Components\TextArea::make('summary')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                \Filament\Forms\Components\Section::make()
                    ->heading('Meta Data')
                    ->schema([
                        Forms\Components\KeyValue::make('socials')
                            ->label('Social Media')
                            ->addActionLabel('Add Social Link')
                            ->keyLabel('Social Platform')
                            ->valueLabel('URL'),
                        Forms\Components\Toggle::make('featured')
                            ->label('Featured Project'),
                        Forms\Components\Toggle::make('visible')
                            ->label('Visible to Public')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('featured', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

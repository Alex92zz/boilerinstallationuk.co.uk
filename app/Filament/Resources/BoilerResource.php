<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoilerResource\Pages;
use App\Filament\Resources\BoilerResource\RelationManagers;
use Closure;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use App\Models\Boiler;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BoilerResource extends Resource
{
    protected static ?string $model = Boiler::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-plus';
    protected static ?string $label = 'Boilers';
    public static ?string $singularLabel = 'Boiler';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
                TextInput::make('name')
                    ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->required()
                        ->label('Boiler Name'),
                
                Textarea::make('meta_description')->label('Meta Description')->required(),
                Textarea::make('meta_keywords')->label('Meta Keywords')->required(),
                TextInput::make('slug')
                ->label('Slug')
                        ->required(),
                TextInput::make('price')
                ->required()
                ->numeric()
                ->label('Price'),
                Textarea::make('main_description')->required()->label('Main Description'),
                Textarea::make('secondary_description')->label('Secondary Description')->required(),
                TextInput::make('spec_1')->label('Specification 1')->required(),
                TextInput::make('spec_2')->label('Specification 2')->required(),
                TextInput::make('spec_3')->label('Specification 3')->required(),
                TextInput::make('spec_4')->label('Specification 4')->required(),
                TextInput::make('spec_5')->label('Specification 5')->required(),
                TextInput::make('brand')->label('Brand')->required(),
                TextInput::make('dimensions')->label('Boiler Dimensions')->required(),
                TextInput::make('flow_rate')->label('DHW Flow Rate')->required(),
                TextInput::make('ErP_rating_heating')->label('ErP Rating Heating')->required(),
                TextInput::make('ErP_rating_DHW')->label('ErP Rating DHW')->required(),
                TextInput::make('ErP_efficiency')->label('ErP Efficiency')->required(),
                FileUpload::make('image_1')->label('Image 1')->directory('/images/boilers')->required(),
                FileUpload::make('image_2')->label('Image 2')->directory('/images/boilers'),
                FileUpload::make('image_3')->label('Image 3')->directory('/images/boilers'),
                FileUpload::make('image_4')->label('Image 4')->directory('/images/boilers'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')->limit('50')->sortable()->searchable(),
            TextColumn::make('slug')->limit('50')->searchable(),
            TextColumn::make('price')->limit('50')->sortable(),
            TextColumn::make('brand')->limit('50')->sortable(),
            // You can add more columns if needed
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBoilers::route('/'),
            'create' => Pages\CreateBoiler::route('/create'),
            'edit' => Pages\EditBoiler::route('/{record}/edit'),
        ];
    }    
}

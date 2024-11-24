<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayStationResource\Pages;
use App\Filament\Resources\PlayStationResource\RelationManagers;
use App\Models\PlayStation;
use Faker\Core\File;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayStationResource extends Resource
{
    protected static ?string $model = PlayStation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('category', 'nama_kategori')
                    ->required(),
                Select::make('alat_id')
                    ->label('Alat')
                    ->relationship('alat', 'nama_alat')
                    ->required(),
                RichEditor::make('deskripsi')
                    ->columnSpan(2)
                    ->required(),
                TextInput::make('harga')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric()
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->imageEditor()
                    ->imageEditorViewportWidth('1000')
                    ->imageEditorViewportHeight('1000')
                    ->rules(['dimensions:ratio=1/1']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.nama_kategori'),
                Tables\Columns\TextColumn::make('alat.nama_alat'),
                Tables\Columns\TextColumn::make('harga'),
                ImageColumn::make('gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListPlayStations::route('/'),
            'create' => Pages\CreatePlayStation::route('/create'),
            'edit' => Pages\EditPlayStation::route('/{record}/edit'),
        ];
    }
}

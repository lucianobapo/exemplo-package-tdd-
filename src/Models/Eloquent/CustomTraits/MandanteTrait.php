<?php

namespace ErpNET\App\Models\Eloquent\CustomTraits;

use ErpNET\App\Models\Eloquent\Scopes\MandanteScope;
use Illuminate\Support\Facades\Auth;

trait MandanteTrait
{
    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootMandanteTrait()
    {
        static::addGlobalScope(new MandanteScope);
    }

    /**
     * Get the name of the column for applying the scope.
     *
     * @return string
     */
    public function getMandanteColumn()
    {
        return defined('static::MANDANTE_COLUMN') ? static::MANDANTE_COLUMN : 'mandante';
    }

    /**
     * Get the fully qualified column name for applying the scope.
     *
     * @return string
     */
    public function getQualifiedMandanteColumn()
    {
        return $this->getTable().'.'.$this->getMandanteColumn();
    }

    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return static
     */
//    public static function create(array $attributes = [])
//    {
//        if (isset(Auth::user()->mandante)) $attributes['mandante'] = Auth::user()->mandante;
//        else $attributes['mandante'] = 'guest';
//
////        dd($attributes);
//
//        $model = new static($attributes);
//
//        $model->save();
//
//        return $model;
//    }

    public function save(array $options = array())
    {
        if (isset(Auth::user()->mandante))
            $this->attributes['mandante'] = Auth::user()->mandante;
        else
            $this->attributes['mandante'] = 'guest';
        parent::save($options);

//        $user = $options['user'];
//        $post = $options['post'];

//        \Event::fire(new PostAdded($user, $post));

    }

}

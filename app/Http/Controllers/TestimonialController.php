<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class TestimonialController extends Controller
{
    public function Testimonial_list()
    {
        $data['getTestimonial'] = Testimonial::getTestimonial();
        return view('dashboard.testimonial.testimonial_list',$data);
    }

    public function Testimonial_add()
    {
        return view('dashboard.testimonial.testimonial_add');
    }

    public function Testimonial_insert(Request $request)
    {
        // dd($request->all());
         $validator = Validator::make($request->all(), [

            'company_name' => 'required',
            'author_name' => 'required',

        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $testimonial_model = new Testimonial();

        $testimonial_model->company_name    = trim($request->company_name);
        $testimonial_model->company_url    = trim($request->company_url);
        $testimonial_model->author_name    = trim($request->author_name);
        $testimonial_model->designation    = trim($request->designation);
        $testimonial_model->content    = trim($request->content);
        $testimonial_model->serial  = $request->serial;
        $testimonial_model->status  = $request->status;

        if($request->author_image)
        {
            $author_image   = $request->file('author_image');
            $filename         = time().'_'.$author_image->getClientOriginalName();
            //echo $filename; exit();
            $author_image->move(public_path('uploads/author_image').'/original/',$filename);

            $image_resize = Image::read(public_path('uploads/author_image').'/original/'.$filename);
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/author_image').'/thumbnail/'.$filename);
            $testimonial_model->author_image = $filename;

        }
        else
        {
            $testimonial_model->author_image = null;
        }

        $testimonial_model->save();

        return redirect('dashboard/testimonial_list')->with('success', 'Testimonial Created Successfully!');
    }

     public function Testimonial_edit($id)
    {

        $data['getTestimonial'] = Testimonial::getSingle($id);
        return view('dashboard.testimonial.testimonial_edit',$data);
    }

     public function Testimonial_update(Request $request, $id)
    {
        $testimonial_model = Testimonial::getSingle($id);

        if (!$testimonial_model)
        {
            return redirect()->back()->with('error', 'Follow Up not found!');
        }

        $testimonial_model->company_name   = trim($request->company_name);
        $testimonial_model->company_url    = trim($request->company_url);
        $testimonial_model->author_name    = trim($request->author_name);
        $testimonial_model->designation    = trim($request->designation);
        $testimonial_model->content        = trim($request->content);
        $testimonial_model->serial  = $request->serial;
        $testimonial_model->status  = $request->status;

        if($request->hasFile('author_image')) {
            $author_image = $request->file('author_image');
            $filename = time().'_'.$author_image->getClientOriginalName();


            $author_image->move(public_path('uploads/author_image/original'), $filename);


            $image_resize = Image::read(public_path('uploads/author_image/original/'.$filename));
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/author_image/thumbnail/'.$filename));


            if ($testimonial_model->author_image && file_exists(public_path('uploads/author_image/original/'.$testimonial_model->author_image))) {
                unlink(public_path('uploads/author_image/original/'.$testimonial_model->author_image));
                unlink(public_path('uploads/author_image/thumbnail/'.$testimonial_model->author_image));
            }


            $testimonial_model->author_image = $filename;
        }

        $testimonial_model->save();

        return redirect('dashboard/testimonial_list')->with('success', 'Testimonial Updated Successfully!');
    }

    public function Testimonial_deleted($id)
    {
        $testimonial_model = Testimonial::getSingle($id);
        $testimonial_model->status = 'Hide';
        $testimonial_model->save();

        return redirect()->back()->with('success', "Testimonial successfully deleted.");
    }
}
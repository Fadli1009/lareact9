import React from "react";
import {Link, Head} from "@inertiajs/react";

export default function Homepage(props){
    console.log(props)
    return(
        <div className="bg-neutral-800 text-white text-2xl">
            <Head title={props.title} />
            <h1>{props.description}</h1>
            {props.news ? props.news.map((data,i)=>{
                return(
                    <div key={i} className="p-4 m-2 bg-white text-black">
                        <p>Title {data.title}</p>
                        <p>Description {data.description}</p>
                        <p>Author{data.author}</p>
                        <p>Category{data.category}</p>
                    </div>
                )
            }): ""}
        </div>
    )
}
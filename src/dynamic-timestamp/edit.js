import {useBlockProps, InspectorControls} from "@wordpress/block-editor";
import {PanelBody, SelectControl} from "@wordpress/components";


export default function Edit ({attributes, setAttributes}) {

	
    return  (
        


        <div {...useBlockProps()}>



            <h1>TimeStamp Preview: {attributes.displayMode}</h1>
            <InspectorControls>
                <PanelBody title="Timestamp Settings">
                    <SelectControl label="Chose the options" options={[
                        {
                            "label": "Current Year", "value": "current_year"
                        },
                        {
                            "label": "Last Updated", "value": "last_updated"
                        }
                    ]}

                    onChange={(newValue)=> {
                        setAttributes({
                            "displayMode": newValue
                        })
                    }}
                    
                    
                    />
                </PanelBody>
            </InspectorControls>


        </div>


    );

}